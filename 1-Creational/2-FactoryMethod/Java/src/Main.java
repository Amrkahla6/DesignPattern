import DocumentGenerator.Application;
import DocumentGenerator.PDFApplication;
import DocumentGenerator.WordApplication;
import LogisticsSystem.Logistics;
import LogisticsSystem.RoadLogistics;
import LogisticsSystem.SeaLogistics;
import NotificationSystem.EmailNotificationCreator;
import NotificationSystem.NotificationCreator;
import NotificationSystem.SMSNotificationCreator;

//TIP To <b>Run</b> code, press <shortcut actionId="Run"/> or
// click the <icon src="AllIcons.Actions.Execute"/> icon in the gutter.
void main() {

    NotificationCreator creator;
    creator = new EmailNotificationCreator();
    creator.sendNotification();

    creator = new SMSNotificationCreator();
    creator.sendNotification();


    Logistics logistics = new RoadLogistics();
    logistics.planDelivery();

    logistics = new SeaLogistics();
    logistics.planDelivery();


    Application application = new PDFApplication();
    application.openDocument();

    application = new WordApplication();
    application.openDocument();
}
