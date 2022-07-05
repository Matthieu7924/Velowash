<div class="forumSpace">
    <div class="poster">
        <h2 class="postit">POSTER UN MESSAGE</h2>
        <form action="" method="post">
            <select name="room_id">
                <?php foreach ($allroom as $room) { ?>
                    <option value="<?php echo $room['id']; ?>">
                        <?php echo $room['name']; ?>
                    </option>
                <?php
                }
                ?>
            </select></br>
            <textarea class="postertextarea" type="text" name="content" placeholder="MESSAGE"></textarea></br />
            <input class="postbutt" type="submit" value="Envoyer" />
        </form>
    </div>

    <?php
    foreach ($allmsg as $msg) {
    ?>
        <div class="contmsg">
            <div class="chmsg">
                <div class="forumMess">
                    <div class="forumIdent">
                        <div class="forumAvatar">
                            <?php
                            $imgAvat = '<img class="imgProfilForum" src="/PUBLIC/avatars/' . $msg['pseudo'] . '' . '.jpg" />';

                            $imgDef= '<img class="imgProfilForum" src="/PUBLIC/avatars/defaults/default.jpg" />';


                        //affiche l'imgAvat mais pas l'imgDef
                            // if (isset($imgAvat)) {
                            //     echo
                            //     $imgAvat; 
                            // }
                            // else{
                            //     echo $imgDef;
                            // }


                        //affiche l'imgAvat et l'imgDef côte à côte
                            // if (isset($imgAvat)) {
                            //     echo
                            //     $imgAvat; 
                            // }
                            // if(is_null($nullAvat['avatar'])){
                            //     echo $imgDef;
                            // }


                        //affiche seulement l'imgDef 
                            // if (!is_null($nullAvat['avatar'])) {
                            //     echo
                            //     $imgAvat; 
                            // }
                            // elseif(is_null($nullAvat['avatar'])){
                            //     echo $imgDef;
                            // }


                        //affiche seulement l'imgDef
                            // if(is_null($nullAvat['avatar'])){
                            //     echo $imgDef;
                            // }
                            // else{
                            //     echo $imgAvat;
                            // }


                        //affiche seulement l'imgDef
                            // if(isset($nullAvat['avatar'])&&!is_null($nullAvat['avatar'])){
                            //     echo $imgAvat;
                            // }
                            // else{
                            //     echo $imgDef;
                            // }


                        //affiche l'imgAvat mais pas l'imgDef
                            // if (isset($imgAvat)) {
                            //     echo
                            //     $imgAvat; 
                            // } 
                            // else{
                            //     echo $imgDef;
                            // }


                        //affiche l'imgAvat mais pas l'imgDef
                            // if(is_null($nullAvat)){
                            //     echo
                            //     $imgDef;       
                            // }
                            // else{
                            //     echo
                            //     $imgAvat;  
                            //     }
                            

                        //affiche l'imgAvat et l'imgDef côte à côte
                            // echo
                            //     $imgAvat;
                            // echo
                            //     $imgDef;


                        //affiche seulement l'imgDef
                            if (!empty($nullAvat['avatar']))
                                {
                                echo $imgAvat;
                                }
                            else
                                {
                                echo $imgDef;
                                }


                            // else if(is_null($ava['avatar'])){
                            //     echo
                            //     $imgDef;          
                            // }


                            // else if(is_null($nullAvat)){
                            //     echo
                            //     $imgDef;          
                            // }

                            // else{
                                ?>
                                <!-- <img class="imgProfil" src="/PUBLIC/avatars/defaults/default.png" /> -->
                                <?php
                            // }
                            ?>
                        </div>
                        <div>
                            <b><?php
                                echo $msg['pseudo'];
                                ?></br></b>
                        </div>
                    </div>
                    <div>
                        <?php
                        echo $msg['content'];
                        ?>
                    </div>
                    <div>
                        <?php
                        echo $msg['date'];
                        ?></br></br>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
    <ul class="pagination">

        <?php
        for ($page = 1; $page <= $pages; $page++) {
            echo ("<li class=\"page-item\"><a class=\"pagiLi\" href=\"./?page=forum&p=$page\">$page</a></li>");
        }
        ?>

    </ul>

</div>