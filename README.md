# alice-extas-example

Пример использования библиотеки [alice-extas](https://github.com/jeyroik/alice-extas "Перейти к библиотеке alice-extas") для реализации навыков для Яндекс.Алисы.

# Установка

`composer require jeyroik/alice-extas-example:*`

# Требования

- MongoDb 2.6+

# Использование

## Тестовый запуск

### Устанавливаем всё необходимое

```
/alice-extas-example# composer i
/alice-extas-example# cp resources/env.dist .env
/alice-extas-example# /vendor/bin/extas i -p extas.json
/alice-extas-example# php -S 0.0.0.0:8080 -t public
```

Это установит тестовый сценарий и тестовые шаги для него.

### Делаем запрос

Любым любимым инструментом шлём запрос на наш навык:

```POST localhost:8080```

Тело запроса:

- `resources/request.message_1.dist` для проверки запуска приветствия
- `resources/request.message_x.help.dist` для проверки запуска помощи при неизвестной команде от пользователя
- `resources/request.message_x.test.dist` для проверки реакции на определённый запрос