<?php

class GuestBookUser
{
    private $userId;        // int
    private $userLogin;     // string
    private $userName;      // string
    private $userEmail;     // string
    private $userPassword;  // string

    /**
     * @param  string  $userLogin
     * @param  string  $userName
     * @param  string  $userEmail
     * @param  string  $userPassword
     * @throws Exception выкидывает эксепшен, если:
     *              - такой юзер уже есть в таблице юзерс
     *              - несоответствие данных (длина строк, пустые значения, неправильные символы)
     *              - ошибка подключения к бд
     */
    public function addUser(string $userLogin, string $userName, string $userEmail, string $userPassword): void
    {
        // выполнение проверок данных для регистрации
        // запись в таблицу users нового юзера, если всё ок
        // вывод сообщения/ошибки
    }

    /**
     * @param  string  $userLogin
     * @param  string  $userPassword
     * @return int возвращает $userId (если найден), который авторизовался и теперь может оставить комментарий
     * @throws Exception выкидывает эксепшен, если:
     *              - юзера с таким логином-паролем нет в таблице users
     *              - не введены данные
     *              - ошибка подключения к бд
     */
    public function getUser(string $userLogin, string $userPassword): int
    {
        // выполнение проверок данных авторизации
        // поиск юзера по логину-паролю в таблице users, если все ок
        // вывод сообщения/ошибки
        return $userId;
    }
}


class GuestBookComment
{
    private $commentId;       // int
    private $userId;          // int
    private $commentText;     // string
    private $commentDateTime; // string

    /**
     * @param  int  $commentId
     * @param  int  $userId
     * @param  string  $commentText
     * @param  string  $commentDateTime
     * @throws Exception выкидывает эксепшен, если:
     *              - нет авторизации (просрочена?)
     *              - текущего авторизованного $userId нет в users (удалили?)
     *              - не введены данные
     *              - ошибка подключения к бд
     */
    public function addComment(int $commentId, int $userId, string $commentText, string $commentDateTime): void
    {
        // выполнение проверок юзера и введенных данных и формирование эксепшенов
        // запись комментария в таблицу comments, если всё ок
        // вывод сообщения/ошибки
    }

    /**
     * @throws Exception выкидывает эксепшен, если:
     *              - нет записей в таблице comments
     *              - ошибка подключения к бд
     */
    public function getComments(): void
    {
        // поиск всех комментариев в таблице comments
        // вывод всех комментариев/ошибки
    }
}
