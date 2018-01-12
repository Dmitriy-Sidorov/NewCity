<div style="display: none;">
    <div id="callback">
        <form class="form callbackForm defForm" id="callbackForm" action="" method="get" onSubmit="
              yaCounterxxxxxxxxxx.reachGoal('CallBack_Form');
               gtag('event', 'sendemailcallback', { 'event_category': 'CallBack_Form', 'event_action': 'SuccessfulSending', });
               return true;">
            <!-- Скрытые поля, которые содержат данные из UTM метки -->
            <input type="hidden" name="source"
                   value="<?php echo isset($_GET['utm_source']) ? $_GET['utm_source'] : ''; ?>"/>
            <input type="hidden" name="term" value="<?php echo isset($_GET['utm_term']) ? $_GET['utm_term'] : ''; ?>"/>
            <input type="hidden" name="medium"
                   value="<?php echo isset($_GET['utm_medium']) ? $_GET['utm_medium'] : ''; ?>"/>
            <!--/-->
            <legend class="text-center">
                Заказать звонок
            </legend>
            <div class="form-group">
                <label for="cfName">Ваше имя </label>
                <input class="form-control" name="cfName" id="cfName">
            </div>
            <div class="form-group">
                <label for="cfPhone">Ваш телефон * </label>
                <input class="form-control masked" name="cfPhone" id="cfPhone" required>
            </div>
            <div class="form-group">
                <button class="btn btn-primary btnRed">Отправить</button>
            </div>
        </form>
    </div>
</div>




<div style="display: none;">
    <div id="view">
        <form class="form viewForm defForm" id="viewForm" action="" method="get" onSubmit="
              yaCounterxxxxxxxxxx.reachGoal('View_Form');
               gtag('event', 'sendemailaction', { 'event_category': 'View_Form', 'event_action': 'SuccessfulSending', });
               return true;">
            <!-- Скрытые поля, которые содержат данные из UTM метки -->
            <input type="hidden" name="source"
                   value="<?php echo isset($_GET['utm_source']) ? $_GET['utm_source'] : ''; ?>"/>
            <input type="hidden" name="term" value="<?php echo isset($_GET['utm_term']) ? $_GET['utm_term'] : ''; ?>"/>
            <input type="hidden" name="medium"
                   value="<?php echo isset($_GET['utm_medium']) ? $_GET['utm_medium'] : ''; ?>"/>
            <!--/-->
            <legend class="text-center">
                Записаться на просмотр
            </legend>
            <div class="form-group">
                <label for="cfName">Ваше имя </label>
                <input class="form-control" name="afName" id="afName">
            </div>
            <div class="form-group">
                <label for="cfPhone">Ваш телефон * </label>
                <input class="form-control masked" name="afPhone" id="afPhone" required>
            </div>
            <div class="form-group">
                <button class="btn btn-primary btnRed">Записаться</button>
            </div>
        </form>
    </div>
</div>



<div style="display: none;">
    <div id="details">
        <form class="form detailsForm defForm" id="detailsForm" action="" method="get" onSubmit="
              yaCounterxxxxxxxxxx.reachGoal('Details_Form');
               gtag('event', 'sendemailstrah', { 'event_category': 'Details_Form', 'event_action': 'SuccessfulSending', });
               return true;">
            <!-- Скрытые поля, которые содержат данные из UTM метки -->
            <input type="hidden" name="source"
                   value="<?php echo isset($_GET['utm_source']) ? $_GET['utm_source'] : ''; ?>"/>
            <input type="hidden" name="term" value="<?php echo isset($_GET['utm_term']) ? $_GET['utm_term'] : ''; ?>"/>
            <input type="hidden" name="medium"
                   value="<?php echo isset($_GET['utm_medium']) ? $_GET['utm_medium'] : ''; ?>"/>
            <!--/-->
            <legend class="text-center">
                Узнать подробности
            </legend>
            <div class="form-group">
                <label for="cfName">Ваше имя </label>
                <input class="form-control" name="shfName" id="shfName">
            </div>
            <div class="form-group">
                <label for="cfPhone">Ваш телефон * </label>
                <input class="form-control masked" name="shfPhone" id="shfPhone" required>
            </div>
            <div class="form-group">
                <button class="btn btn-primary btnRed">Отправить</button>
            </div>
        </form>
    </div>
</div>

<!--ks-->
<div style="display: none;">
    <div id="ks">
        <form class="form ksForm defForm" id="ksForm" action="" method="get" onSubmit="
              yaCounterxxxxxxxxxx.reachGoal('ks_Form');
               gtag('event', 'sendemailstrah', { 'event_category': 'ks_Form', 'event_action': 'SuccessfulSending', });
               return true;">
            <!-- Скрытые поля, которые содержат данные из UTM метки -->
            <input type="hidden" name="source"
                   value="<?php echo isset($_GET['utm_source']) ? $_GET['utm_source'] : ''; ?>"/>
            <input type="hidden" name="term" value="<?php echo isset($_GET['utm_term']) ? $_GET['utm_term'] : ''; ?>"/>
            <input type="hidden" name="medium"
                   value="<?php echo isset($_GET['utm_medium']) ? $_GET['utm_medium'] : ''; ?>"/>
            <!--/-->
            <legend class="text-center">
                Подробнее о Студии
            </legend>
            <div class="form-group">
                <label for="cfName">Ваше имя </label>
                <input class="form-control" name="shfName" id="shfName">
            </div>
            <div class="form-group">
                <label for="cfPhone">Ваш телефон * </label>
                <input class="form-control masked" name="shfPhone" id="shfPhone" required>
            </div>
            <div class="form-group">
                <button class="btn btn-primary btnRed">Отправить</button>
            </div>
        </form>
    </div>
</div>

<!--k1-->
<div style="display: none;">
    <div id="k1">
        <form class="form k1Form defForm" id="k1Form" action="" method="get" onSubmit="
              yaCounterxxxxxxxxxx.reachGoal('k1_Form');
               gtag('event', 'sendemailstrah', { 'event_category': 'k1_Form', 'event_action': 'SuccessfulSending', });
               return true;">
            <!-- Скрытые поля, которые содержат данные из UTM метки -->
            <input type="hidden" name="source"
                   value="<?php echo isset($_GET['utm_source']) ? $_GET['utm_source'] : ''; ?>"/>
            <input type="hidden" name="term" value="<?php echo isset($_GET['utm_term']) ? $_GET['utm_term'] : ''; ?>"/>
            <input type="hidden" name="medium"
                   value="<?php echo isset($_GET['utm_medium']) ? $_GET['utm_medium'] : ''; ?>"/>
            <!--/-->
            <legend class="text-center">
                Подробнее об Однокомнтной квартире
            </legend>
            <div class="form-group">
                <label for="cfName">Ваше имя </label>
                <input class="form-control" name="shfName" id="shfName">
            </div>
            <div class="form-group">
                <label for="cfPhone">Ваш телефон * </label>
                <input class="form-control masked" name="shfPhone" id="shfPhone" required>
            </div>
            <div class="form-group">
                <button class="btn btn-primary btnRed">Отправить</button>
            </div>
        </form>
    </div>
</div>

<!--k2-->
<div style="display: none;">
    <div id="k2">
        <form class="form k2Form defForm" id="k2Form" action="" method="get" onSubmit="
              yaCounterxxxxxxxxxx.reachGoal('k2_Form');
               gtag('event', 'sendemailstrah', { 'event_category': 'k2_Form', 'event_action': 'SuccessfulSending', });
               return true;">
            <!-- Скрытые поля, которые содержат данные из UTM метки -->
            <input type="hidden" name="source"
                   value="<?php echo isset($_GET['utm_source']) ? $_GET['utm_source'] : ''; ?>"/>
            <input type="hidden" name="term" value="<?php echo isset($_GET['utm_term']) ? $_GET['utm_term'] : ''; ?>"/>
            <input type="hidden" name="medium"
                   value="<?php echo isset($_GET['utm_medium']) ? $_GET['utm_medium'] : ''; ?>"/>
            <!--/-->
            <legend class="text-center">
                Подробнее о Двухкомнтной квартире
            </legend>
            <div class="form-group">
                <label for="cfName">Ваше имя </label>
                <input class="form-control" name="shfName" id="shfName">
            </div>
            <div class="form-group">
                <label for="cfPhone">Ваш телефон * </label>
                <input class="form-control masked" name="shfPhone" id="shfPhone" required>
            </div>
            <div class="form-group">
                <button class="btn btn-primary btnRed">Отправить</button>
            </div>
        </form>
    </div>
</div>

<!--k3-->
<div style="display: none;">
    <div id="k3">
        <form class="form k3Form defForm" id="k3Form" action="" method="get" onSubmit="
              yaCounterxxxxxxxxxx.reachGoal('k3_Form');
               gtag('event', 'sendemailstrah', { 'event_category': 'k3_Form', 'event_action': 'SuccessfulSending', });
               return true;">
            <!-- Скрытые поля, которые содержат данные из UTM метки -->
            <input type="hidden" name="source"
                   value="<?php echo isset($_GET['utm_source']) ? $_GET['utm_source'] : ''; ?>"/>
            <input type="hidden" name="term" value="<?php echo isset($_GET['utm_term']) ? $_GET['utm_term'] : ''; ?>"/>
            <input type="hidden" name="medium"
                   value="<?php echo isset($_GET['utm_medium']) ? $_GET['utm_medium'] : ''; ?>"/>
            <!--/-->
            <legend class="text-center">
                Подробнее о Трехкомнтной квартире
            </legend>
            <div class="form-group">
                <label for="cfName">Ваше имя </label>
                <input class="form-control" name="shfName" id="shfName">
            </div>
            <div class="form-group">
                <label for="cfPhone">Ваш телефон * </label>
                <input class="form-control masked" name="shfPhone" id="shfPhone" required>
            </div>
            <div class="form-group">
                <button class="btn btn-primary btnRed">Отправить</button>
            </div>
        </form>
    </div>
</div>

<!-------------------------------------------------------------------->


<!--Елка-->

<div style="display: none;">
    <div id="tree">
        <form class="form treeForm defForm" id="treeForm" action="" method="get" onSubmit="
              yaCounterxxxxxxxxxx.reachGoal('tree_Form');
               gtag('event', 'sendemailstrah', { 'event_category': 'tree_Form', 'event_action': 'SuccessfulSending', });
               return true;">
            <!-- Скрытые поля, которые содержат данные из UTM метки -->
            <input type="hidden" name="source"
                   value="<?php echo isset($_GET['utm_source']) ? $_GET['utm_source'] : ''; ?>"/>
            <input type="hidden" name="term" value="<?php echo isset($_GET['utm_term']) ? $_GET['utm_term'] : ''; ?>"/>
            <input type="hidden" name="medium"
                   value="<?php echo isset($_GET['utm_medium']) ? $_GET['utm_medium'] : ''; ?>"/>
            <!--/-->
            <legend class="text-center">
                <div class="lagend-form">«Новый Город» запускает Новогоднюю акцию<br>
                    «Квадратные метры в подарок» до 31 декабря 2017 года!</div>
                <div>Вы можете сэкономить до 100 000 рублей</div>
            </legend>
            <div class="form-group">
                <label for="treeName">Ваше имя </label>
                <input class="form-control" name="treeName" id="treeName">
            </div>
            <div class="form-group">
                <label for="treePhone">Ваш телефон * </label>
                <input class="form-control masked" name="treePhone" id="treePhone" required>
            </div>
            <div class="form-group">
                <button class="btn btn-primary btnRed">Отправить</button>
            </div>
        </form>
    </div>
</div>


<!--iPhone-->

<div style="display: none;">
    <div id="iphone">
        <form class="form iphoneForm defForm" id="iphoneForm" action="" method="get" onSubmit="
              yaCounterxxxxxxxxxx.reachGoal('iphone_Form');
               gtag('event', 'sendemailstrah', { 'event_category': 'iphone_Form', 'event_action': 'SuccessfulSending', });
               return true;">
            <!-- Скрытые поля, которые содержат данные из UTM метки -->
            <input type="hidden" name="source"
                   value="<?php echo isset($_GET['utm_source']) ? $_GET['utm_source'] : ''; ?>"/>
            <input type="hidden" name="term" value="<?php echo isset($_GET['utm_term']) ? $_GET['utm_term'] : ''; ?>"/>
            <input type="hidden" name="medium"
                   value="<?php echo isset($_GET['utm_medium']) ? $_GET['utm_medium'] : ''; ?>"/>
            <!--/-->
            <legend class="text-center">
                <div class="lagend-form">Купи квартиру получи iPhone в подарок!</div>
                <div>
                    Всего 5 квартир! Торопитесь!
                    Будь первым обладателем!</div>
            </legend>
            <div class="form-group">
                <label for="iphoneName">Ваше имя </label>
                <input class="form-control" name="iphoneName" id="iphoneName">
            </div>
            <div class="form-group">
                <label for="iphonePhone">Ваш телефон * </label>
                <input class="form-control masked" name="iphonePhone" id="iphonePhone" required>
            </div>
            <div class="form-group">
                <button class="btn btn-primary btnRed">Отправить</button>
            </div>
        </form>
    </div>
</div>



<!--Ремонт-->

<div style="display: none;">
    <div id="remont">
        <form class="form remontForm defForm" id="remontForm" action="" method="get" onSubmit="
              yaCounterxxxxxxxxxx.reachGoal('remont_Form');
               gtag('event', 'sendemailstrah', { 'event_category': 'remont_Form', 'event_action': 'SuccessfulSending', });
               return true;">
            <!-- Скрытые поля, которые содержат данные из UTM метки -->
            <input type="hidden" name="source"
                   value="<?php echo isset($_GET['utm_source']) ? $_GET['utm_source'] : ''; ?>"/>
            <input type="hidden" name="term" value="<?php echo isset($_GET['utm_term']) ? $_GET['utm_term'] : ''; ?>"/>
            <input type="hidden" name="medium"
                   value="<?php echo isset($_GET['utm_medium']) ? $_GET['utm_medium'] : ''; ?>"/>
            <!--/-->
            <legend class="text-center">
                <div class="lagend-form">Ремонт под ключ!</div>
                <div>Экономия до 100 000 руб.</div>
            </legend>
            <div class="form-group">
                <label for="remontName">Ваше имя </label>
                <input class="form-control" name="remontName" id="remontName">
            </div>
            <div class="form-group">
                <label for="remontPhone">Ваш телефон * </label>
                <input class="form-control masked" name="remontPhone" id="remontPhone" required>
            </div>
            <div class="form-group">
                <button class="btn btn-primary btnRed">Отправить</button>
            </div>
        </form>
    </div>
</div>



<!--Копилка-->

<div style="display: none;">
    <div id="kopilka">
        <form class="form remontForm defForm" id="remontForm" action="" method="get" onSubmit="
              yaCounterxxxxxxxxxx.reachGoal('remont_Form');
               gtag('event', 'sendemailstrah', { 'event_category': 'remont_Form', 'event_action': 'SuccessfulSending', });
               return true;">
            <!-- Скрытые поля, которые содержат данные из UTM метки -->
            <input type="hidden" name="source"
                   value="<?php echo isset($_GET['utm_source']) ? $_GET['utm_source'] : ''; ?>"/>
            <input type="hidden" name="term" value="<?php echo isset($_GET['utm_term']) ? $_GET['utm_term'] : ''; ?>"/>
            <input type="hidden" name="medium"
                   value="<?php echo isset($_GET['utm_medium']) ? $_GET['utm_medium'] : ''; ?>"/>
            <!--/-->
            <legend class="text-center">
                <div class="lagend-form">Время разбивать копилки!</div>
                <div>Квартиры за 890 100 рублей!</div>
            </legend>
            <div class="form-group">
                <label for="remontName">Ваше имя </label>
                <input class="form-control" name="remontName" id="remontName">
            </div>
            <div class="form-group">
                <label for="remontPhone">Ваш телефон * </label>
                <input class="form-control masked" name="remontPhone" id="remontPhone" required>
            </div>
            <div class="form-group">
                <button class="btn btn-primary btnRed">Отправить</button>
            </div>
        </form>
    </div>
</div>

