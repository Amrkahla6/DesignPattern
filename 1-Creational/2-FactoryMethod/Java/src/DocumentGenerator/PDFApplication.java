package DocumentGenerator;

public class PDFApplication extends Application {
    @Override
    public Document createDocument() {
        return new PDFDocument();
    }
}
