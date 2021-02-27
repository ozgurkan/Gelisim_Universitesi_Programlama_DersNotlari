

package olay;

import java.awt.FlowLayout;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import javax.swing.JButton;
import javax.swing.JFrame;

public class OlayPenceresi extends JFrame {
    
    public OlayPenceresi()
    {
        setLayout (new FlowLayout());
        JButton b1=new JButton ("Tamam");
        add(b1); 
        ButonDinleyici  dinle=new ButonDinleyici();
        b1.addActionListener(dinle);
    }
}
    
    class ButonDinleyici implements ActionListener
    {

    @Override
    public void actionPerformed(ActionEvent ae) {
        System.out.println("N.K.İ.V.A.S");
        
    }
     
    }

