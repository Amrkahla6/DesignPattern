package EcommerceShipping;

public class DHLShipping implements Shipping {
    @Override
    public void deliver() {
        System.out.println("Deliver via DHL");
    }
}
