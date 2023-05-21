<?php 

$js_array = [ 'js/member.js' ];

$g_title = '약관';
$menu_code = 'member';

include 'inc_header.php'; 

?>

    <main class="p-5 border rounded-5">
      <h1 class="text-center">회원 약관 및 개인정보 취급방침 동의</h1>
      <h4>회원 약관</h4>
      <textarea name="" id="" cols="30" rows="10" class="form-control">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto illum nihil eaque cum modi numquam accusamus? Alias voluptas, corporis saepe ipsum laborum accusamus maxime consequatur dolores magni nostrum itaque consectetur laudantium vitae porro vel! Accusantium excepturi, consectetur temporibus ipsa veniam accusamus qui illo alias provident tenetur dolorum nihil reprehenderit non laboriosam quidem corporis quam ullam minima voluptatum aliquam pariatur distinctio incidunt. Dolorem ipsam reprehenderit nesciunt neque labore quae unde nisi optio animi. Labore odit veritatis itaque, repudiandae, aliquam corrupti natus laudantium adipisci illum similique minima dolore doloribus impedit. Id aspernatur sint nesciunt? Quam porro dolor voluptatibus iusto beatae eius perspiciatis repellat incidunt neque aliquid. Veritatis suscipit ea reprehenderit dolore nemo error numquam autem id culpa sunt exercitationem est pariatur inventore sequi, perspiciatis ipsa aliquam cupiditate voluptatibus quisquam odio aspernatur aliquid adipisci non? Cupiditate distinctio sit, quisquam tenetur quae saepe, expedita omnis ad iste porro consectetur adipisci est tempora eveniet quis voluptatem commodi eius numquam quo maiores? Molestias soluta eum debitis et enim nostrum nesciunt ut dignissimos? Impedit voluptatum obcaecati, consequuntur accusamus saepe, ullam eum aut nemo totam, animi eos temporibus est ratione cupiditate nisi. Impedit aperiam, veniam a fugit totam eum eaque, vitae hic suscipit quisquam architecto aliquid consectetur minima eius cumque vel iusto? Odit incidunt tenetur aspernatur delectus labore, quia cupiditate expedita animi corporis dignissimos earum, consequatur placeat modi omnis, sit adipisci blanditiis quasi. Quod molestias, aspernatur sunt quibusdam impedit aliquam adipisci iure libero dignissimos, ab obcaecati ipsum, praesentium minus. Quo pariatur ipsum minus debitis facilis, ipsam recusandae porro. Consequatur veritatis eius, enim architecto aliquid laboriosam unde, nobis fugit aperiam atque nostrum commodi molestiae! Quasi eaque corporis blanditiis omnis placeat dolorum tempora architecto accusantium. Ex incidunt cupiditate illum totam molestiae commodi accusantium dignissimos, laborum rerum delectus! Eveniet tempora suscipit commodi expedita rerum aspernatur architecto, labore dolorem eaque, dolor eius.
      </textarea>

      <div class="form-check mt-2">
        <input class="form-check-input" type="checkbox" value="1" id="chk_member1">
        <label class="form-check-label" for="chk_member1">
          위 약관에 동의하시겠습니까?
        </label>
      </div>

      <h4 class="mt-3">개인정보 취급방침</h4>
      <textarea name="" id="" cols="30" rows="10" class="form-control">
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nemo beatae ipsam, quo repudiandae blanditiis recusandae deleniti facere accusantium quasi modi consequatur dolor explicabo, numquam sequi in, alias officiis mollitia nihil quis possimus consectetur officia aspernatur maxime. Repellendus atque beatae, maxime quisquam eaque pariatur eveniet. Nulla autem accusantium tempore dolorum necessitatibus aut ipsum facere. Id fugiat ipsum recusandae assumenda, consectetur corrupti quae explicabo dolor optio, atque porro repellat molestias quibusdam error voluptatem. Aliquam veritatis voluptates dicta, magni illo deleniti temporibus, voluptate natus vitae facilis consequatur, sed consectetur? Doloremque, ut vero. Enim amet quam, natus corporis nam atque magnam vero error delectus quas aperiam suscipit quidem, possimus id at corrupti porro necessitatibus impedit. Dolores repudiandae nam quam unde eum eos! Temporibus voluptas animi aspernatur fugiat, quasi cupiditate iure at nam quas distinctio! Hic, optio esse enim, rem sed dolorem consequuntur ipsa natus voluptatum deleniti atque expedita dolorum sunt earum fugit voluptates ducimus maiores, reprehenderit maxime fuga harum explicabo cupiditate. Perspiciatis laudantium nemo ratione, cupiditate sit eum ab commodi quis cum doloremque vel nostrum, facere obcaecati pariatur iusto ipsum maiores architecto dignissimos a hic quae eius, eligendi quibusdam? Voluptatem aut perferendis facilis fugit nulla quaerat distinctio. Officiis, tenetur labore sequi voluptatum quae fugit maxime? Eos voluptatum totam ea magnam laboriosam minus explicabo reiciendis sequi dolore cum, debitis blanditiis iusto obcaecati perspiciatis, soluta, voluptas molestias incidunt distinctio recusandae mollitia praesentium voluptate dolorum ipsam ratione? Voluptates nostrum quae cupiditate suscipit possimus fugit sit vitae, eligendi nulla velit eveniet vero recusandae! Voluptatem consequatur necessitatibus tempora deserunt sed libero, ex blanditiis, itaque porro incidunt distinctio facilis cupiditate accusamus minima voluptates cum corporis id provident. Cum incidunt odit, facilis magnam quo in similique mollitia quidem facere praesentium eveniet hic error explicabo eum sint consequuntur corrupti repellendus enim quod quis, totam quisquam! Voluptatibus laborum quas earum ipsum odio impedit?
      </textarea>

      <div class="form-check mt-2">
        <input class="form-check-input" type="checkbox" value="1" id="chk_member2">
        <label class="form-check-label" for="chk_member2">
          위 개인정보 취급방침에 동의하시겠습니가?
        </label>
      </div>

      <div class="mt-4 d-flex justify-content-center gap-2">
        <button class="btn btn-primary w-50" id="btn_member">회원가입</button>
        <button class="btn btn-secondary w-50">가입취소</button>
      </div>

      <form method="post" name="stipluation_form" action="member_input.php">
        <input type="hidden" name="chk" value="0">
      </form>

    </main>

<?php include 'inc_footer.php'; ?>    