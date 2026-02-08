import EcommerceShipping.Shipping;
import EcommerceShipping.ShippingFactory;
import PaymentTask.Payment;
import PaymentTask.PaymentFactory;

//TIP To <b>Run</b> code, press <shortcut actionId="Run"/> or
// click the <icon src="AllIcons.Actions.Execute"/> icon in the gutter.
void main() {

  //Payment task
  Payment payment = PaymentFactory.createPayment("visa");
  payment.pay();

  //Shipping task
  Shipping shipping = ShippingFactory.createShipping("Aramex");
  shipping.deliver();
}
