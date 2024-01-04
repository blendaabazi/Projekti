package projekti;

import java.util.LinkedList;
public class EkipiInsertionSort {
    private String emri;
    private LinkedList<Sportisti> sportistet;
    public EkipiInsertionSort(String emri) throws SportistiException{
        if(emri==null || emri.trim().isEmpty()){
            throw new SportistiException("Emri null!");
        }
        this.emri=emri;
        sportistet = new LinkedList<Sportisti>();
    }
    public boolean ekziston(Sportisti s)throws SportistiException{
        if(s==null){
            throw new SportistiException("Nuk ka sportist!");
        }
        else if(sportistet.contains(s)){
            return true;
        }
        return false;
    }
    public void shtoSportistin(Sportisti s)throws SportistiException{
        if(s==null){
            throw new SportistiException("Nuk ka sportist!");
        }
        else if(ekziston(s)){
            throw new SportistiException("Sportisti ekziston!");
        }
        else{
            sportistet.add(s);
        }
    }
    
    public void insertionSortSportistet() {
        int n = sportistet.size();
        for (int i = 1; i < n; ++i) {
            Sportisti key = sportistet.get(i);
            int j = i - 1;

            while (j >= 0 && less(key, sportistet.get(j))) {
                exch(sportistet, j + 1, j);
                j = j - 1;
            }
            sportistet.set(j + 1, key);
        }
    }

    private void exch(LinkedList<Sportisti> a, int i, int j) {
        Sportisti temp = a.get(i);
        a.set(i, a.get(j));
        a.set(j, temp);
    }

    private boolean less(Sportisti v, Sportisti w) {
        return v.getMosha() < w.getMosha();
    }
    
    public void printAll(){
        for(Sportisti s:sportistet ){
            System.out.println(s);
        }
    }
    public static void main(String []arg){
        EkipiInsertionSort e=null;
        try{
            e=new EkipiInsertionSort("Kosova Team");
            Sportisti s1 = new Sportisti(8, "Pedri Gonzalez", 21, 'M', 23);
            Sportisti s2 = new Sportisti(2, "Gavi", 20, 'M', 17);
            Sportisti s3 = new Sportisti(5, "Robert Lewandowski", 35, 'M', 32);
            Sportisti s4 = new Sportisti(6, "Lionel Messi", 21, 'M', 17);
            Sportisti s5 = new Sportisti(7, "Philippe Coutinho", 19, 'M', 17);
            Sportisti s6 = new Sportisti(18, "Raphinha Belloli", 27, 'M', 17);
            Sportisti s7 = new Sportisti(11, "Marc-Andre ter Stegen", 31, 'M', 17);
            Sportisti s8 = new Sportisti(33, "Joao Felix", 24, 'M', 17);
            Sportisti s9 = new Sportisti(23, "Frenkie de Jong", 26, 'M', 17);
            Sportisti s10 = new Sportisti(34, "Memphis Depay", 30, 'M', 17);
            Sportisti s11 = new Sportisti(12, "Ansu Fati", 21, 'M', 17);
            Sportisti s12 = new Sportisti(9, "Ousmane Dembele", 26, 'M', 17);
            Sportisti s13 = new Sportisti(1, "Adama Balde", 27, 'M', 17);
            Sportisti s14 = new Sportisti(26, "Pedro Porro", 24, 'M', 17);
            Sportisti s15 = new Sportisti(27, "Sergino Dest", 23, 'M', 17);
            Sportisti s16 = new Sportisti(28, "Ronald Araujo", 25, 'M', 17);    
            Sportisti s17 = new Sportisti(29, "Ferran Torres", 23, 'M', 17);
            Sportisti s18 = new Sportisti(30, "Neymar Jr", 31, 'M', 17);
            Sportisti s19 = new Sportisti(31, "Kylian Mbappe", 25, 'M', 23);
            Sportisti s20 = new Sportisti(32, "Antoine Griezmann", 32, 'M', 17);
            
            
           
            

                        
            
            
            e.shtoSportistin(s1);
            e.shtoSportistin(s2);
            e.shtoSportistin(s3);
            e.shtoSportistin(s4);
            e.shtoSportistin(s5);
            e.shtoSportistin(s6);
            e.shtoSportistin(s7);
            e.shtoSportistin(s8);
            e.shtoSportistin(s9);
            e.shtoSportistin(s10);
            e.shtoSportistin(s11);
            e.shtoSportistin(s12);
            e.shtoSportistin(s13);
            e.shtoSportistin(s14);
            e.shtoSportistin(s15);
            e.shtoSportistin(s16);
            e.shtoSportistin(s17);
            e.shtoSportistin(s18);
            e.shtoSportistin(s19);
            e.shtoSportistin(s20);
            
            
           
            
            System.out.println("------------  Print All -------------------");
            
            e.printAll();
            System.out.println("\n----------------------  Pas sortimit InsertionSort---------------------------");
            e.insertionSortSportistet();
            e.printAll();
            
        }catch(SportistiException se){
            se.printStackTrace();
        }
        
    }
    
}



