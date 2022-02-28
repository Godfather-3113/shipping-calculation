<?php
require __DIR__ . '/../vendor/autoload.php';


function debug ($data)
{
    echo '<pre>' . print_r($data, 1) . '</pre>';
}


use classes\Delivery;


$fast = new Delivery('Moscow','Tashkent',12.5,'slow');

function htmlRender()
{
    $outer = "<div class='calculator__content calculator__content_step1'>
                <h2 class='typo-h2 calculator__title'>Расчет доставки из Узбекистана в Россию*</h2>
                <div class='form calculator_form'>
                    <div class='form__row'>
                        <div class='form-field form-field_has_icon form-field_icon_from'>
                            <input type='hidden' name='from_id' value='' class='js-calculator-from-id'>
                            <input type='text' name='from' class='form-field__input' value='' data-for='.js-calculator-from-id' placeholder='Откуда' autocomplete='off'>
                            <div class='form-field__error-message'>Выберите город отправки</div>
                        </div>
                    </div>
                    <div class='form__row'>
                        <div class='form-field form-field_has_icon form-field_icon_to'>
                            <input type='hidden' name='to_id' value='' class='js-calculator-to-id'>
                            <input type='text' name='to' class='form-field__input' value='' data-for='.js-calculator-to-id' placeholder='Куда' autocomplete='off'>
                            <div class='form-field__error-message'>Выберите город получения</div>
                        </div>
                    </div>
                    <div class='form__row'>
                        <div class='form-field form-field_has_icon form-field_icon_weight'>
                            <input type='text' name='mass' class='form-field__input' value='' placeholder='Вес (кг)' autocomplete='off'>
                            <div class='form-field__error-message'>Укажите вес посылки</div>
                        </div>
                    </div>
                    <div class='form__three-fields form__row_last'>
                        <div class='form__row'>
                            <div class='form-field'>
                                <input type='text' name='length' class='form-field__input' value='' placeholder='Длина (см)' autocomplete='off'>
                                <div class='form-field__error-message'>Укажите примерную длину</div>
                            </div>
                        </div>
                        <div class='form__row'>
                            <div class='form-field'>
                                <input type='text' name='width' class='form-field__input' value='' placeholder='Ширина (см)' autocomplete='off'>
                                <div class='form-field__error-message'>Укажите примерную ширину</div>
                            </div>
                        </div>
                        <div class='form__row'>
                            <div class='form-field'>
                                <input type='text' name='height' class='form-field__input' value='' placeholder='Высота (см)' autocomplete='off'>
                                <div class='form-field__error-message'>Укажите примерную высоту</div>
                            </div>
                        </div>
                    </div>
                    <div class='form-field'>
                        <input type='button' value='Рассчитать стоимость' class='primary-button primary-button_wide primary-button_submit js-calculator-step1-button'>
                    </div>
                </div>
                <div class='calculator__description'>
При оформлении отправки, сотрудники CDEK проверят фактический и объемный вес отправлений. Оплата будет производиться за большую из двух величин. Объемный вес рассчитывается по формуле: Длина (см) × Ширина (см) × Высота (см) / 5000 = Объемный вес (кг).                </div>
            </div>";
    echo $outer;
}

debug($fast->addDelivery($fast) );

htmlRender();
//debug($fast->basePrice());