package DocumentGenerator;

public abstract class Application {
    public abstract Document createDocument();

    public void openDocument(){
        Document document = createDocument();
        document.open();
    }
}
