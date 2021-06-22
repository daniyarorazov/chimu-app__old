<!-- Step 3 -->
<section class="section-register register__step_3">
    <div class="container">
        <div class="section-header">
            <h2 class="section-register__title">Дополнительная информация</h2>
        </div>
        <div class="section-forms">
            <select name="gender" id="mselectGenderEdit" class="section-register__input" require>
                <option value=""></option>
                <?php
                    foreach ($gender_data as $tag) {
                        if (in_array($tag, $gender)) {
                            echo "<option value=$tag selected>$tag</option>";
                        } else {
                            echo "<option value=$tag>$tag</option>";
                        }
                    }
                ?>
                
                
               
            </select>
            <!-- <input type="text" name="social_media_facebook" class="section-register__input" placeholder="Facebook" /> -->
            <input type="text" name="social_media_instagram" value="<?= $profile->social_media_instagram ?>" class="section-register__input" placeholder="Instagram" />
            <!-- <input type="text" name="social_media_vk" class="section-register__input" placeholder="Vk" /> -->
            <input type="text" name="social_media_telegram" value="<?= $profile->social_media_telegram ?>" class="section-register__input" placeholder="Telegram" />
        </div>
        <div class="section-controls">
            <button type="button" class="section-register__button_next next_3">Далее</button>
            <button type="button" class="section-register__button_back back_3">Назад</button>
        </div>
    </div>
</section>