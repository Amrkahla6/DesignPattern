package EcommerceShipping;

public class ShippingFactory {
    public static Shipping createShipping(String company) {
        return switch (company) {
            case "Aramex" -> new AramexShipping();
            case "dhl" -> new DHLShipping();
            default -> throw new RuntimeException("Invalid company");
        };
    }
}
