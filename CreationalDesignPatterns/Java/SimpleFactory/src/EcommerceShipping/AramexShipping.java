package EcommerceShipping;

public class AramexShipping implements Shipping {
    @Override
    public void deliver() {
        System.out.println("Deliver via Aramex");
    }
}
