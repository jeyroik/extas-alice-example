# Extas-alice-example

Пример использования библиотеки [extas-alice](https://github.com/jeyroik/extas-alice "Перейти к библиотеке extas-alice") для реализации навыков для Яндекс.Алисы.

# Установка

```
/# cd ~
~# git clone https://github.com/jeyroik/extas-alice-example.git
~# cd extas-alice-example
~/extas-alice-example# composer i
~/extas-alice-example# cp resources/env.dist .env
~/extas-alice-example# vendor/bin/extas i
~/extas-alice-example# php -S 0.0.0.0:8080 -t public
```

# Требования

- MongoDb 3.0+

# Использование

Любым любимым инструментом шлём запрос на наш навык:

```POST localhost:8080```

Тело запроса см. в соответствующих файлах:

- `resources/request.message_1.dist` для проверки запуска приветствия
- `resources/request.message_x.help.dist` для проверки запуска помощи при неизвестной команде от пользователя
- `resources/request.message_x.test.dist` для проверки реакции на определённый запрос
