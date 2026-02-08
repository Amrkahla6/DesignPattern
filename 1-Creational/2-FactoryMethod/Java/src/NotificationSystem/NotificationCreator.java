package NotificationSystem;

public abstract class NotificationCreator {
    // Factory Method
    public abstract Notification createNotification();

    // Business logic
    public void sendNotification(){
        Notification notification = createNotification();
        notification.send();
    }
}
