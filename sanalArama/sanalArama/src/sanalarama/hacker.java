package sanalarama;

/**
 *
 * @author hakanyolat
 */
import java.util.*;
public class hacker {
    private kisi[] kurbanlar;
    private String hackerAdi;
    public hacker(String hackerAdi){
        this.hackerAdi = hackerAdi;
    }
    public void kurbanlar(kisi[] kurbanlar){
        this.kurbanlar = kurbanlar;
    }
    public void hackle(){
        for(int i=0; i<this.kurbanlar.length; i++){
            System.out.println("------------------------------------------------------------");
            System.out.println(this.kurbanlar[i].adsoyad + " adlı kişinin konuşma dökümleri");
            System.out.print("Aranan Kişiler : ");
            for(int ii=0; ii<this.kurbanlar[i].arananKisiler.size(); ii++){
                System.out.print( ii > 0 ? " , "+this.kurbanlar[i].arananKisiler.get(ii) : this.kurbanlar[i].arananKisiler.get(ii) );
            }
            System.out.print("\nArayan Kişiler : ");
            for(int ii=0; ii<this.kurbanlar[i].arayanKisiler.size(); ii++){
                System.out.print( ii > 0 ? " , "+this.kurbanlar[i].arayanKisiler.get(ii) : this.kurbanlar[i].arayanKisiler.get(ii) );
            }
            System.out.println();
        }
    }
}
