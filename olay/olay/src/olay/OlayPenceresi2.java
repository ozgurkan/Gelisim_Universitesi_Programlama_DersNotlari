
package olay;

import java.awt.FlowLayout;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.util.Date;
import javax.swing.JFrame;
import javax.swing.JButton;
        
public class OlayPenceresi2 extends JFrame{
    private JButton b1=new JButton("1");
    private JButton b2=new JButton("2");
    
    public OlayPenceresi2()
    {
        setLayout(new FlowLayout());
        add(b1);
        add(b2);
        ButonDinleyici dinle = new ButonDinleyici();
        b1.addActionListener(dinle);
        b2.addActionListener(dinle);
    }

   
    
    
    private class ButonDinleyici implements ActionListener
    {

        @Override
        public void actionPerformed(ActionEvent ae) {
        String hangisi = ae.getActionCommand();
        Date tarih = new Date(ae.getWhen());
        System.out.println("Tıklana buton: "+hangisi+" Tarih: "+tarih);
        }
        
    }

   
    
}
