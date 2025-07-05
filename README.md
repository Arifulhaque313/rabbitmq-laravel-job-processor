# rabbitmq-laravel-job-processor

Laravel job processor using RabbitMQ for efficient queue-based task handling.

## 🚀 Project Overview

This Laravel application demonstrates how to use RabbitMQ as a queue driver to dispatch and process background jobs. It is a simple yet powerful example of event-driven architecture using Laravel Queues and RabbitMQ.

## 📦 Features

- Laravel + RabbitMQ integration
- Dispatch and consume background jobs
- Log job execution
- Simple `/send-message` route for testing

## 🛠️ Requirements

- PHP 8.1+
- Laravel 10/11
- Docker or local RabbitMQ installation
- Composer
- Queue worker running (`php artisan queue:work`)

## 🔧 Installation

1. **Clone the Repository**

```bash
git clone https://github.com/your-username/rabbitmq-laravel-job-processor.git
cd rabbitmq-laravel-job-processor
```


2. **Install Dependencies**

```bash
composer install
```

3. **Copy .env and Configure**

```bash
cp .env.example .env
```
Update your .env with RabbitMQ settings:

```bash
QUEUE_CONNECTION=rabbitmq

RABBITMQ_HOST=127.0.0.1
RABBITMQ_PORT=5672
RABBITMQ_USER=user
RABBITMQ_PASSWORD=password
RABBITMQ_VHOST=/
```

4. **Generate App Key**
```bash
php artisan key:generate
```

5. **Run the Queue Worker**
```bash
php artisan queue:work
```

6. **Start the Server**
```bash
php artisan serve
```

7. **Send a Test Job**
Visit http://localhost:8000/send-message to dispatch a job to RabbitMQ.

**📄 Example Job**
```php
Route::get('/send-message', function () {
    ProcessRabbitMQMessage::dispatch();
    return "Message sent to RabbitMQ!";
});
```

**📄 Log output**
```pgsql
[date] local.INFO: RabbitMQ Job processed successfully
```

**✅ License**
MIT License

Made with ❤️ by Ariful Haque Sajib



