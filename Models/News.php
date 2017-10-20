<?php

namespace Models;

/**
 * Модель "Новости" содержащая бизнес логику
 * относящуюся к сущности "Новости"
 * 
 * @author farza
 */
class News
{
    /**
     * Метод, отвечающий за получение всех данных
     * о новостях портала
     * 
     * @author farZa
     * @return array
     */
    public function displayAll()
    {
        // Строка соединения с базой данных
        $dsn = 'mysql:host=127.0.0.1;dbname=db_name;';
        // Создаем экземпляр класса для работы с БД
        $pdo = new \PDO($dsn, 'admin', 'admin');
        
        // SQL запрос на получение всех новостей
        $sql = 'SELECT * FROM news';
        
        // Возвращаем полученные из БД данные
        return $pdo->query($sql)->fetchAll(\PDO::FETCH_ASSOC);
    }
}

