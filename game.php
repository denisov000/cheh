<?php include_once $_SERVER['DOCUMENT_ROOT']."/php/header.php"; ?>

    <?php $id = $_GET["id"] ?>

    <main>
        <section class="info">
            <img src="<?= $games[$id]['img'] ?>" alt="">
            <div>
                <h1><?= $games[$id]['name'] ?></h1>
                <p><?= $games[$id]['about'] ?></p>
            </div>
        </section>
        <section class="game_content">
            <aside>
                <div class="topic_list">
                    <ul>
                        <li><a href="">main</a></li>
                        <li><a href="">nomain</a></li>
                        <li><a href="">under nomain</a></li>
                    </ul>
                </div>
            </aside>
            <section class="wall">
                <div class="post">
                    <div class="post_head">
                        <span>User, 20.12.2025</span>
                    </div>
                    <div class="post_body">
                        <h2>About game</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem impedit sequi quisquam ratione blanditiis, fugiat distinctio provident, accusamus eaque odio quaerat nobis nisi, eius nihil natus nulla alias obcaecati dolore!
                        Eligendi saepe dolorum quia illum voluptatem harum voluptas dignissimos accusantium ipsum doloribus nisi nam, deleniti ut voluptatum praesentium vero sed minus nulla voluptates quasi vel ratione? Iusto molestiae unde est?
                        Harum minima provident alias illo dignissimos in totam explicabo, rem ullam molestiae ab culpa ea necessitatibus cupiditate porro, eius quo. Repellat excepturi doloremque adipisci porro ea molestiae saepe aut quia!
                        Delectus voluptatem vel consequuntur laboriosam tempore sapiente quibusdam repudiandae quo harum animi iusto earum enim sit nam officia numquam, nisi porro! Architecto deserunt repudiandae doloribus, distinctio itaque fugiat eum dolor.
                        Dicta nesciunt quia tempore vel? In animi odit eligendi corrupti, excepturi vel enim reprehenderit ullam quidem dicta? Aliquam, sint facilis quibusdam numquam voluptas neque aut placeat voluptatum earum consequatur eligendi?
                        Reiciendis mollitia quo earum quis autem aperiam voluptatum est? Eius non ducimus, asperiores est esse reprehenderit explicabo facilis incidunt tempore quibusdam magnam ullam iusto rerum! Ea modi harum molestias dolorem?
                        Obcaecati pariatur consectetur officiis distinctio necessitatibus, quasi illo reiciendis temporibus tempora omnis excepturi provident impedit nesciunt laudantium! Hic error dicta id deleniti velit ea iure cupiditate quos, eius soluta ratione.
                        Vero unde voluptate cum cupiditate, nobis molestias adipisci accusamus. Quisquam quas pariatur, ab molestiae quae inventore cupiditate, eum nulla, quo reprehenderit hic id animi dicta sint aspernatur ex ipsum laudantium!
                        Inventore fugit facere quidem voluptas quae. Error, porro. Voluptatem illo sapiente nemo fuga atque illum earum perferendis, saepe magnam doloribus porro, eaque voluptate, laudantium asperiores quis ex incidunt dolores aperiam?
                        Dolor nemo sunt, distinctio odio non a? Molestiae a maiores quos? Maxime quisquam voluptas unde, eos blanditiis saepe soluta, rem pariatur consequatur labore est dolore quod assumenda distinctio accusamus reprehenderit?
                        Placeat atque voluptates voluptate repellat in dolores est, reprehenderit incidunt ipsum error commodi ab? Iste quaerat esse ipsa excepturi beatae rem molestias neque corrupti sunt inventore veniam aspernatur, necessitatibus dolore.
                        Temporibus, explicabo quod? Quam rem qui possimus accusamus, enim itaque illo libero quibusdam quod tenetur maiores ipsam laborum illum vel. Sed est aliquam quod, aliquid reiciendis deserunt beatae enim ipsam.
                        Praesentium officiis tenetur nihil, expedita, repudiandae magnam earum vero consequatur sapiente minima, amet fugiat a facilis eligendi in dolorum nulla ad qui deserunt fugit et quos error. Labore, reiciendis! Vitae!
                        Dolorem nam iure alias et quam temporibus! Illo quasi, fuga at labore minus vero. Accusantium est repellendus repellat dolorum numquam iusto, itaque dolorem consequatur mollitia? Doloremque ea quo numquam asperiores.
                        Quod, laborum? Voluptas molestiae aspernatur repellat aperiam eum magni cupiditate non alias eveniet. Error reiciendis magni asperiores reprehenderit delectus soluta natus, ipsa officiis, vero nostrum odit blanditiis et necessitatibus quis?</p>
                    </div>
                </div>
                <div class="post">
                    <div class="post_head">
                        <span>User, 20.12.2025</span>
                    </div>
                    <div class="post_body">
                        <h2>About game</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis fuga consectetur beatae quam distinctio illum pariatur labore inventore perspiciatis culpa! Repudiandae eaque recusandae quaerat hic quod perferendis vel cupiditate earum!
                        Sapiente amet ab nisi dicta commodi exercitationem quos, dolor aut aspernatur praesentium laboriosam, adipisci modi, tenetur dolore ipsa voluptate libero. Voluptatibus magni obcaecati animi inventore repellendus nemo cupiditate illo non?
                        In consequuntur eius labore provident inventore, odit laudantium fugiat voluptatum, facilis sed minima repellat illum recusandae officiis molestias rem veritatis quia! Dicta, unde nisi dolor eveniet quis enim id quidem.
                        Repellat mollitia nisi corrupti iusto placeat voluptatibus libero necessitatibus quisquam voluptatem quis! Quisquam porro velit odit, illo consectetur nisi tempore possimus quo odio a! Obcaecati quos sed nostrum maiores optio?
                        Atque, sed asperiores numquam id non qui velit minus recusandae iusto mollitia, nemo odio autem eveniet tempora delectus, explicabo ea laborum incidunt? Aspernatur pariatur dignissimos non aliquam corrupti, nulla facere?</p>
                    </div>
                </div>
            </section>
        </section>
    </main>
<?php include_once $_SERVER['DOCUMENT_ROOT']."/php/footer.php"; ?>