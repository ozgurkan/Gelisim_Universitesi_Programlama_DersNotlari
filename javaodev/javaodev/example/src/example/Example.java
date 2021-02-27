
package example;

import javax.swing.JFrame;


public class Example {

    public static void main(String[] args) {
        ikonornek pencere = new ikonornek();
        pencere.setSize(200,200);
        pencere.setLocationRelativeTo(null);
        pencere.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        pencere.setVisible(true);
      
    }
    
}
