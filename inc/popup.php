<?php
// 팝업 클래스

class Popup {
  private $conn;

  // 생성자
  public function __construct($db) {
    $this->conn = $db;
  }

  // 입력
  public function input($arr) {
    $sql = "INSERT INTO popups(name, sdate, edate, pop_x, pop_y, file, link, cookie, `use`, create_at) 
      VALUES(:name, :sdate, :edate, :pop_x, :pop_y, :file, :link, :cookie, :use, NOW())";
    $stmt = $this->conn->prepare($sql);
    $params = [':name' => $arr['name'], ':sdate' => $arr['sdate'], ':edate' => $arr['edate']
    , ':pop_x' => $arr['pop_x'], ':pop_y' => $arr['pop_y'], ':file' => $arr['file']
    , ':link' => $arr['link'], ':cookie' => $arr['cookie'], ':use' => $arr['use']];
    $stmt->execute($params);
  }

  // 수정
  public function edit($arr) {
    $sql = "UPDATE popups SET `name`=:name, sdate=:sdate, edate=:edate, pop_x=:pop_x, pop_y=:pop_y, link=:link, cookie=:cookie,
    `use`=:use";

    $params = [ ':name' => $arr['name'], ':sdate' => $arr['sdate'], ':edate' => $arr['edate']
      , ':pop_x' => $arr['pop_x'], ':pop_y' => $arr['pop_y']
      , ':link' => $arr['link'], ':cookie' => $arr['cookie'], ':use' => $arr['use'] ];

    if($arr['file'] != '') {
      $sql .= ", file=:file";
      $params[':file'] = $arr['file'];
    }

    $sql .= " WHERE idx=:idx";
    $params[':idx'] = $arr['idx'];

    // echo $sql;
    // print_r($params);
    // exit;

    $stmt = $this->conn->prepare($sql);
    $stmt->execute($params);

  }

  public function delete($idx) {
    $sql = "DELETE FROM popups WHERE idx=:idx";
    $stmt = $this->conn->prepare($sql);
    $params = [':idx' => $idx];
    $stmt->execute($params);
  }

  // 가져오기
  public function get_info($idx) {
    $sql = "SELECT * FROM popups WHERE idx=:idx";
    $stmt = $this->conn->prepare($sql);
    $params = [':idx' => $idx];
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $stmt->execute($params);
    return $stmt->fetch();
  }

  // 목록
  public function list() {
    $sql = "SELECT * FROM popups";
    $stmt = $this->conn->prepare($sql);
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $stmt->execute();
    return $stmt->fetchAll();    
  }

  // 유효한 팝업목록
  public function valid_list() {
    $sql = "SELECT * FROM popups WHERE `use`=1
    AND sdate <= DATE_FORMAT(NOW(),'%Y-%m-%d')
    AND edate >= DATE_FORMAT(NOW(),'%Y-%m-%d') ";
    $stmt = $this->conn->prepare($sql);
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $stmt->execute();
    return $stmt->fetchAll();    
  }


  // 파일 삭제
  public function file_unlink($file) {
    if (file_exists(POPUP_DIR .'/'. $file )) {
      unlink(POPUP_DIR .'/'. $file);
    }
  }

  // 파일 첨부
  public function file_attach($file) {

    $tmp_arr = [];

    $tmparr = explode('.', $file['name']);
    $ext = end($tmparr);   

    $arrowed_file_ext = ['gif', 'jpg','png', 'jpeg'];

    if(!in_array($ext, $arrowed_file_ext)) {
      $arr = ['result' => 'not_allowed_file'];
      die(json_encode($arr));
    }

    $flag = rand(1000, 9999);
    $filename = 'p'. date('YmdHis') . $flag .'.'. $ext;
    $file_ori = $file['name'];
    //  a2023112322234434.jpg|새파일.jpg

    // copy() move_uploaded_file()
    copy($file['tmp_name'], POPUP_DIR .'/'. $filename);

    return $filename .'|'. $file_ori;
  }

  
}

/*
idx INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
`name` VARCHAR(255) DEFAULT '',
`sdate` DATE,
`edate` DATE,
`pop_x` INTEGER DEFAULT 0,
`pop_y` INTEGER DEFAULT 0,
`file` VARCHAR(255) DEFAULT '',
`link` VARCHAR(255) DEFAULT '',
`cookie` ENUM('day','week','month') DEFAULT 'day',
`use` TINYINT DEFAULT 1,
`create_at` DATETIME,
*/