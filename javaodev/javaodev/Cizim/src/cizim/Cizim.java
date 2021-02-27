
package cizim;
import javax.swing.JFrame;

public class Cizim {

 
    public static void main(String[] args) {
        PencereOlustur pencere = new PencereOlustur();
        pencere.setSize(200,200);
        pencere.setLocationRelativeTo(null);
        pencere.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        pencere.setVisible(true);
    }
}
