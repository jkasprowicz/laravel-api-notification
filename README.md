# Laravel Notification API

This is a simple RESTful API built with **Laravel** that allows you to send and retrieve notifications for users. The API supports sending notifications with various urgency levels and can be used to manage unread notifications. This project showcases how to implement user notifications using Laravel's built-in notification system, with support for both **database** and **broadcast** channels.

## Features

- **Send Notifications**: Send notifications to users with a custom message and urgency level.
- **Fetch Unread Notifications**: Retrieve unread notifications for specific users.
- **Database Notifications**: Notifications are stored in the database for persistence.
- **Broadcast Notifications**: Notifications can be broadcasted in real-time (optional configuration).

## Endpoints
| Method | Endpoint         | Description             |
|--------|------------------|-------------------------|
| POST    | `/api/send-notification`| Send a new notification to a user        |
| GET    | `/api/notifications/unread/{userId}`| Get unread notifications for a user  |
| POST   | `/api/notifications/{notificationId}/mark-read`     | Mark a notification as read    |

Technologies Used

Laravel: PHP framework.
MySQL: Database.
Postman: For API testing.
