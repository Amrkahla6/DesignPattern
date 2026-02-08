package PaymentTask;

public class PaymentFactory {

    public static Payment createPayment(String type) {
        if (type.equalsIgnoreCase("paypal")) {
            return new PaypalPayment();
        }

        if (type.equalsIgnoreCase("visa")) {
            return new VisaPayment();
        }

        if (type.equalsIgnoreCase("cash")) {
            return new CashPayment();
        }

        throw new IllegalArgumentException("Invalid payment type");
    }

}
