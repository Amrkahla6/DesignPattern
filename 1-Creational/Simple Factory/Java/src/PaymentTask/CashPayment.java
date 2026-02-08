package PaymentTask;

public class CashPayment implements  Payment {
    @Override
    public void pay() {
        System.out.println("Pay usnig cash");
    }
}
