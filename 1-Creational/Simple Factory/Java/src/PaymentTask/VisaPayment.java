package PaymentTask;

public class VisaPayment implements Payment {
    @Override
    public void pay() {
        System.out.println("Pay usnig visa");
    }
}
