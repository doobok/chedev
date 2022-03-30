import Vue from 'vue'
import {MLInstaller, MLCreate, MLanguage} from 'vue-multilanguage'

Vue.use(MLInstaller)

export default new MLCreate({
    initial: 'ru',
    languages: [
        new MLanguage('ru').create({
            dark_mode_toggle: 'Переключить тему',
            lead_h: 'Оставьте контактный номер',
            lead_d: 'И наш специалист свяжется с Вами',
            you_name: 'Ваше имя',
            name: 'Имя',
            enter_name: 'укажите имя',
            phone: 'Номер телефона',
            enter_phone: 'введите действительный номер телефона',
            format_err: 'ошибка ввода',
            fill_form: 'заполните форму',
            continue: 'продолжить',
            phone_secure: 'мы никогда не передадим Ваш номер телефона третьим лицам',
            lead_success: 'Номер телефона успешно отправлен',
            lead_success_d: 'С вами свяжутся в течение часа для консультации, ждите звонка!',
            back_to_site: 'Вернутся к просмотру сайта',

        }),

        new MLanguage('uk').create({
            dark_mode_toggle: 'Переключити тему',
            lead_h: 'Залишіть контактний номер',
            lead_d: 'І наш спеціаліст зв\'яжеться з Вами',
            you_name: 'Ваше ім\'я',
            name: 'Ім\'я',
            enter_name: 'вкажіть ім\'я',
            phone: 'Номер телефону',
            enter_phone: 'введіть дійсний номер телефону',
            format_err: 'помилка вводу',
            fill_form: 'заповніть форму',
            continue: 'продовжити',
            phone_secure: 'ми ніколи не передамо Ваш номер телефону третім особам',
            lead_success: 'Номер телефону успішно відправлений',
            lead_success_d: 'З вами зв\'яжуться на протязі години для консультації, очікуйте на дзвінок!',
            back_to_site: 'Повернутись до перегляду сайту',

        }),

    ]
})
