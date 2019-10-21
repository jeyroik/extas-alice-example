# alice-extas-example

Пример использования библиотеки [alice-extas](https://github.com/jeyroik/alice-extas "Перейти к библиотеке alice-extas") для реализации навыков для Яндекс.Алисы.

# Установка

```
/# cd /var/www
/var/www# git clone https://github.com/jeyroik/alice-extas-example.git
/var/www# cd alice-extas-example
/var/www/alice-extas-example# composer i
/var/www/alice-extas-example# cp resources/env.dist .env
/var/www/alice-extas-example# /vendor/bin/extas i
/var/www/alice-extas-example# php -S 0.0.0.0:8080 -t public
```

# Требования

- MongoDb 2.6+

# Использование

Любым любимым инструментом шлём запрос на наш навык:

```POST localhost:8080```

Тело запроса см. в соответствующих файлах:

- `resources/request.message_1.dist` для проверки запуска приветствия
- `resources/request.message_x.help.dist` для проверки запуска помощи при неизвестной команде от пользователя
- `resources/request.message_x.test.dist` для проверки реакции на определённый запрос
