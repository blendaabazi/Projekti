package projekti;
public class Sportisti{
    private int id;
    private String emri;
    private int mosha;
    private char gjinia;
    private int numri;

    public Sportisti(int id, String emri, int mosha, char gjinia, int numri) throws SportistiException{
        if(id<=0){
            throw new SportistiException("ID duhet te jete me e madhe se 0");
        }
        this.id=id;
        if(emri==null || emri.isEmpty()|| emri.trim().isEmpty()){
            throw new SportistiException("Emri nuk duhet te jete i zbrazet");
        }
        this.emri=emri;
        if(mosha<=16){
            throw new SportistiException("Mosha duhet te jete me e madhe se 15");
        }
        this.mosha=mosha;
        if(gjinia!='M' && gjinia!='F'){
            throw new SportistiException("Gjinia e gabuar");
        }
        this.gjinia=gjinia;
         if(numri<=0){
            throw new SportistiException("Numri duhet te jete pozitiv");
        }
        this.numri=numri;
    }
    public int getId(){
        return id;
    }
    public String getEmri(){
        return emri;
    }
    public int getMosha(){
        return mosha;
    }
    public char getGjinia(){
        return gjinia;
    }
    public int getNumri(){
        return numri;
    }
    public void setEmri(String emri) throws SportistiException{
        if(emri==null || emri.isEmpty()|| emri.trim().isEmpty()){
            throw new SportistiException("Emri nuk duhet te jete i zbrazet");
        }
        this.emri=emri;
    }
    public void setMosha(int mosha) throws SportistiException{
         if(mosha<=16){
            throw new SportistiException("Mosha duhet te jete me e madhe se 15");
        }
        this.mosha=mosha;
    }
    public void setGjinia(char gjinia) throws SportistiException{
         if(gjinia!='M' && gjinia!='F'){
            throw new SportistiException("Gjinia e gabuar");
        }
        this.gjinia=gjinia;
    }
    public void setNumri(int numri) throws SportistiException{
         if(numri<=0){
            throw new SportistiException("Numri duhet te jete pozitiv");
        }
        this.numri=numri;
    }
    public String toString(){
        return id+" : "+emri+" "+(gjinia=='M'?" mashkull":" femer")+" "+mosha+" vjec";
    }
    public boolean equals(Object o){
        if(o instanceof Sportisti){
            Sportisti s=(Sportisti)o;
            return s.id==id;
        }
        return false;
    }
    
}
