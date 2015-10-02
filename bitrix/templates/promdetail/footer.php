<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>
    <?php if(!$isMainPage) : ?>
            <?php if( $isNews == false ) : ?>
                </div><!-- col-md-9 -->
            </div><!-- row -->
            <?php endif ?>
        </div><!-- content-block -->
    </div><!-- wrap -->
    <?php endif ?>
    <footer id="company">
        <div class="wrap">
            <div class="copyright">«Челябпромдеталь» 2012-2015т. Вся информация на сайте является собственностью владельца сайта. Копирование и распространение информации разрешается только с письменного согласия владельца</div>
        </div>
    </footer>
</div>
<div class="modal__wrap js-modal-send-request">
    <div class="modal__block modal__block_phone">
        <div class="modal__block-top">
            <div class="modal__block-top-text">Отправить заявку</div>
            <div class="modal__block-top-close"></div>
        </div>
        <form type="submit" class="modal__block-form">
            <label class="modal__block-form-field"><span class="modal__block-form-field-title">Ваши фамилия, имя, отчество</span>
                <input type="text" class="modal__block-form-field-input" />
            </label>
            <label class="modal__block-form-field"><span class="modal__block-form-field-title">Организация *</span>
                <input type="text" class="modal__block-form-field-input" />
            </label>
            <label class="modal__block-form-field"><span class="modal__block-form-field-title">E-mail *</span>
                <input type="text" class="modal__block-form-field-input" />
            </label>
            <label class="modal__block-form-field"><span class="modal__block-form-field-title">Телефон</span>
                <input type="text" class="modal__block-form-field-input" />
            </label>
            <label class="modal__block-form-field"><span class="modal__block-form-field-title">Текст сообщения</span>
                <textarea class="modal__block-form-field-input modal__block-form-field-input_textarea"></textarea>
            </label>
            <div class="modal__block-form-field-note">* поля обязательные для заполнения</div>
            <input type="submit" value="отправить" class="modal__block-form-submit" />
        </form>
    </div>
</div>
<div class="modal__wrap js-modal-callback">
    <div class="modal__block modal__block_callback">
        <div class="modal__block-top">
            <div class="modal__block-top-text">Заказать звонок</div>
            <div class="modal__block-top-close"></div>
        </div>
        <form type="submit" class="modal__block-form">
            <label class="modal__block-form-field"><span class="modal__block-form-field-title">Ваши фамилия, имя, отчество</span>
                <input type="text" class="modal__block-form-field-input" />
            </label>
            <label class="modal__block-form-field"><span class="modal__block-form-field-title">Телефон</span>
                <input type="text" class="modal__block-form-field-input" />
            </label>
            <div class="modal__block-form-field-note">* поля обязательные для заполнения</div>
            <input type="submit" value="отправить" class="modal__block-form-submit" />
        </form>
    </div>
</div>
<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/assets/scripts/jquery.min.js')?>
<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/assets/scripts/jquery.mobile.custom.min.js')?>
<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/assets/scripts/bootstrap.min.js')?>
<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/assets/scripts/fancybox/source/jquery.fancybox.js')?>
<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/assets/scripts/app.min.js')?>
</body>

</html>