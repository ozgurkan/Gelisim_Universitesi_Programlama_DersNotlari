
package cizim;
import java.awt.Color;
import java.awt.Font;
import java.awt.Graphics;
import javax.swing.JLabel;

public class GrafikEtiketi extends JLabel{
   
 public GrafikEtiketi(String Text)
 {
      super (Text);
 }

    @Override
    protected void paintComponent(Graphics g) {
        super.paintComponent(g);
        g.setColor(Color.red);
        g.setFont(new Font("TimesNewRoman",Font.BOLD,20));
        g.drawLine(0,0,50,50);
    }
 
 }
 


