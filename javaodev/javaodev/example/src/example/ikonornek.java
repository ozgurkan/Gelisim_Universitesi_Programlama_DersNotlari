
package example;
import javax.swing.JFrame;
import javax.swing.ImageIcon;
import java.awt.GridLayout;
import javax.swing.JButton;
import javax.swing.JLabel;
public class ikonornek extends JFrame{
    private ImageIcon ikon=new ImageIcon(getClass().getResource("/resimler/ikon.gif"));
    

public ikonornek()
{
setLayout(new GridLayout(1,2,5,5));
add(new JLabel (ikon));
add(new JButton (ikon));

}
}