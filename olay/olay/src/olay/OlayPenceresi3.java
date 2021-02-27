

package olay;

import java.awt.event.WindowEvent;
import java.awt.event.WindowListener;
import javax.swing.JFrame;

public class OlayPenceresi3  extends JFrame{
    public OlayPenceresi3()
    {
     WindowsDinleyici dinleyici = new  WindowsDinleyici ();
     addWindowListener(dinleyici);
     
    }
    private class WindowsDinleyici implements WindowListener
    {

        @Override
        public void windowActivated(WindowEvent we) {
           
        }

        @Override
        public void windowClosed(WindowEvent we) {
           System.out.println("pencere kapatıldı");
        }

        @Override
        public void windowClosing(WindowEvent we) {
           
        }

        @Override
         public void windowDeactivated(WindowEvent we) {
           
        }

        @Override
        public void windowDeiconified(WindowEvent we) {
          
        }

        @Override
        public void windowIconified(WindowEvent we) {
          
        }

        @Override
        public void windowOpened(WindowEvent we) {
            System.out.println("pencere açıldı");
        }
   
    }
}
