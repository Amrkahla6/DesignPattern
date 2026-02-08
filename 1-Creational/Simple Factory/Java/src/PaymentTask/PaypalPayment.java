package PaymentTask;

public class PaypalPayment implements  Payment {
    @Override
    public void pay() {
        System.out.println("Pay usnig paypal");
    }
}
