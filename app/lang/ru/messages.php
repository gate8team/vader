<?php
/**
 * Created by PhpStorm.
 * User: anthony
 * Date: 20.09.14
 * Time: 1:51
 */

return array(
    'app' => array(
        'name' => 'DVader'
    ),
    'auth' => array(
        'signin' => array(
            'title' => 'Точка входа в административную область',
            'fields' => array(
                'login' => 'Логин',
                'password' => 'Пароль',
                'buttonEnter' => 'Войти',
                'forgetPassword' => 'Забыли пароль?',
                'noAccount' => 'Нет аккаунта в системе?',
                'buttonCreate' => 'Зарегистрироваться'
            )
        ),
        'signup' => array(
            'title' => 'Точка входа в административную область',
            'fields' => array(
                'login' => 'Логин',
                'password' => 'Пароль',
                'email' => 'Email',
                'buttonEnter' => 'Войти',
                'forgetPassword' => 'Забыли пароль?',
                'noAccount' => 'Нет аккаунта в системе?',
                'buttonCreate' => 'Зарегистрироваться',
                'passwordConfirm' => 'Подтвердите пароль',
                'alreadyRegistered' => 'Уже зарегистрированы?'
            )
        ),
        'common' => array(
            'footer' => array(
                'description' => 'Партнерская система DVader'
            )
        ),
        'statuses' => array(
            'loggedIn' => 'Вы успешно вошли в систему!',
            'logInError' => 'Вы ввели некорректный логин/пароль. Попробуйте еще раз!',
            'registered' => 'Вы успешно зарегистрировались в системе!',
            'registerError' => 'Введенные данные при регистрации некоректны!',
            'loggedOut' => 'Вы успешно вышли из системы!'
        )
    )
);