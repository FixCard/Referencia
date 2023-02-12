using System;
using System.Collections.Generic;
using System.Data;
using System.Data.SqlClient;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows;
using System.Windows.Controls;
using System.Windows.Controls.Primitives;
using System.Windows.Data;
using System.Windows.Documents;
using System.Windows.Input;
using System.Windows.Media;
using System.Windows.Media.Imaging;
using System.Windows.Navigation;
using System.Windows.Shapes;



namespace WPFbeadandomunka
{
    /// <summary>
    /// Interaction logic for MainWindow.xaml
    /// </summary>
    public partial class MainWindow : Window
    {
        public MainWindow()
        {
            InitializeComponent();
            betoltesGrid(); //Grid betöltése miatt van rá szükség, ez fogja nekünk betölteni a táblázatot a Gridbe.
        }


        SqlConnection con = new SqlConnection(@"Data Source=.\sqlexpress; Initial Catalog=LoginDB; Integrated Security=True;"); //Csatlakoztatja az adatbázist a programhoz.


        public void reset() //Ez egy olyan funckió ami a textboxokat egybe foglalja és ha van bele valami írva törli.
        {
            nev_txt.Clear();
            hozzaferes_txt.Clear();
            email_txt.Clear();
            biztonsagi_txt.Clear();
            kereses_txt.Clear();
        }

        public void betoltesGrid() //Ez jeleníti meg a gridben az adatbázis adatait.
        {
            SqlCommand cmd = new SqlCommand("select * from tblAdmin", con);
            DataTable dt = new DataTable();
            con.Open();
            SqlDataReader sdr = cmd.ExecuteReader();
            dt.Load(sdr);
            con.Close();
            datagrid.ItemsSource = dt.DefaultView;
        }

        private void resetbtn_Click(object sender, RoutedEventArgs e) //ez egy gombnak a funkciója ha lenyomják akkor végve megy a reset2 dolga, vagyis kitörli a textboxokból az információkat.
        {
            reset();
        }

        public bool haErvenyes() //ez egy ellenörző, azt figyeli, hogy van e írva valami a textboxba vagy nincs, és ha nincs feldob egy messageboxot, hogy az a mező nincsen kitöltve.
        {
            if(nev_txt.Text == String.Empty)
            {
                MessageBox.Show("Név megadása kötelező!", "Sikertelen", MessageBoxButton.OK, MessageBoxImage.Error);
                return false;
            }

            if (hozzaferes_txt.Text == String.Empty)
            {
                MessageBox.Show("Hozzáférési jogosultság megadása kötelező!", "Sikertelen", MessageBoxButton.OK, MessageBoxImage.Error);
                return false;
            }

            if (email_txt.Text == String.Empty)
            {
                MessageBox.Show("Email megadása kötelező!", "Sikertelen", MessageBoxButton.OK, MessageBoxImage.Error);
                return false;
            }

            if (biztonsagi_txt.Text == String.Empty)
            {
                MessageBox.Show("Biztonsági szint megadása kötelező!", "Sikertelen", MessageBoxButton.OK, MessageBoxImage.Error);
                return false;
            }
            return true;

        }

        public bool haErvenyes3() //ez szintén egy ellenörző ami azt figyeli, hogy van e írva valami a textboxba vagy nincs, és ha nincs feldob egy messageboxot, hogy az a mező nincsen kitöltve.
        {
            if (nev_txt.Text == String.Empty)
            {
                MessageBox.Show("Név megadása kötelező!", "Sikertelen", MessageBoxButton.OK, MessageBoxImage.Error);
                return false;
            }

            if (hozzaferes_txt.Text == String.Empty)
            {
                MessageBox.Show("Hozzáférési jogosultság megadása kötelező!", "Sikertelen", MessageBoxButton.OK, MessageBoxImage.Error);
                return false;
            }

            if (email_txt.Text == String.Empty)
            {
                MessageBox.Show("Email megadása kötelező!", "Sikertelen", MessageBoxButton.OK, MessageBoxImage.Error);
                return false;
            }

            if (biztonsagi_txt.Text == String.Empty)
            {
                MessageBox.Show("Biztonsági szint megadása kötelező!", "Sikertelen", MessageBoxButton.OK, MessageBoxImage.Error);
                return false;
            }

            if (kereses_txt.Text == String.Empty)
            {
                MessageBox.Show("ID megadása kötelező", "Sikertelen", MessageBoxButton.OK, MessageBoxImage.Error);
                return false;
            }

            return true;

        }

        public bool haErvenyes2() //és ez szintén egy ellenörző ami azt figyeli, hogy van e írva valami a textboxba vagy nincs, és ha nincs feldob egy messageboxot, hogy az a mező nincsen kitöltve.
        {
            if (kereses_txt.Text == String.Empty)
            {
                MessageBox.Show("ID megadása kötelező", "Sikertelen", MessageBoxButton.OK, MessageBoxImage.Error);
                return false;
            }
            return true;
        }

        private void rogzitesbtn_Click(object sender, RoutedEventArgs e) //ez a rögzíts gomb funkciója ha lenyomják végbe megy az adatok rögzítése. úgy működik hogy,
                                                                         //a textboxba írt adatokat összekapcsolja az adatbázissal és úgy a megadott helyre menti a táblázatban,
                                                                         //közben figyeli, hogy minden mező kivan e töltve, ugye ez a haervenyes() rész feladata,
                                                                         //ha van benne valami engedélyezi a rögzítést, illetve a bevitel ellenörzőtt,
                                                                         //ha van valami hiba a rögzítéssel kapcsolatban azt kiírja.
        {
            try
            {
                if (haErvenyes())
                {
                    SqlCommand cmd = new SqlCommand("INSERT INTO tblAdmin VALUES (@Name, @Acces, @Email, @PriorityLvl)", con);
                    cmd.CommandType = CommandType.Text;
                    cmd.Parameters.AddWithValue("@Name", nev_txt.Text);
                    cmd.Parameters.AddWithValue("@Acces", hozzaferes_txt.Text);
                    cmd.Parameters.AddWithValue("@Email", email_txt.Text);
                    cmd.Parameters.AddWithValue("@PriorityLvl", biztonsagi_txt.Text);
                    con.Open();
                    cmd.ExecuteNonQuery();
                    con.Close();
                    betoltesGrid();
                    MessageBox.Show("Sikeres rögzítés", "Mentve", MessageBoxButton.OK, MessageBoxImage.Information);
                    reset();
                }
            }
            catch(SqlException ex)
            {
                MessageBox.Show(ex.Message);
            }
        }

        private void torlesbtn_Click(object sender, RoutedEventArgs e) //Ez a törlés gomb funckiója ha megnyomják ugye kitöröl egy recordot az adatbázis táblázatából,
                                                                       //a törlés ellenörzött ha nincs ID megadva vissza dob egy hibát és nem hajt végre semmit ha van megadva ID akkor töröl.
        {
            con.Open();
            SqlCommand cmd = new SqlCommand("delete from tblAdmin WHERE ID = " +kereses_txt.Text+ " ", con);
            try
            {
                cmd.ExecuteNonQuery();
                MessageBox.Show("A Record törölve lett.", "Törölve!", MessageBoxButton.OK, MessageBoxImage.Information);
                con.Close();
                reset();
                betoltesGrid();
                con.Close();

            }catch(SqlException ex)
            {
                MessageBox.Show("Sikertelen törlés. ID megadása kötelező. Hiba! " +ex.Message);
            }
            finally
            {
                con.Close();
            }
        }

        private void frissitesbtn_Click(object sender, RoutedEventArgs e)  //Ez a frissítés gomb funkciója ha megynomjuk akkor a benne lévő kódsor lefut,
                                                                           //ez is ellenörzőtt tehát ha a megfelelő mezők nincsenek megadva akkor a frissítés nem végződik el és hibát dob vissza nekünk,
                                                                           //egyrészt ez lehet olyan hiba amit a haervenyes2() dobhat vissza hogy nincs kitöltve egy textbox,
                                                                           //vagy adatbázis hibát dobhat vissza amit kiír hogy mi a hiba.
        {
            con.Open();
            SqlCommand cmd = new SqlCommand("update tblAdmin set Name = '"+nev_txt.Text+"', Acces ='"+hozzaferes_txt.Text+"', Email = '"+email_txt.Text+"', PriorityLvl = '"+biztonsagi_txt.Text+"' WHERE ID = '"+kereses_txt.Text+"'  ", con);
            try
            {
                if(haErvenyes3())
                {
                    cmd.ExecuteNonQuery();
                    MessageBox.Show("A Record sikeresen frissítve lett!", "Frissítve!", MessageBoxButton.OK, MessageBoxImage.Information);
                    reset();
                }
                
                
            }catch(SqlException ex)
            {
                MessageBox.Show(ex.Message);
            }finally
            {
                con.Close();

                betoltesGrid();

            }
        }

        private void bezarasmenu_click(object sender, RoutedEventArgs e) //a toolbaron belül a bezárásra kattintva bezárja az egész alkalmazást és kilép belőle a this.close() segítségével
        {
            
            this.Close();
        }

        private void mentesmenu_click(object sender, RoutedEventArgs e) //a toolbaron belül a mentésre kattintva kiad egy messageboxot hogy a mentés sikeres és hogy automatikusan ment amúgy is a rendszer.
        {
            MessageBox.Show("A program automatikusan menti magát! :) De a mentés sikeres.", "Mentve!", MessageBoxButton.OK, MessageBoxImage.Information);

        }

        private void segitsegmenu_click(object sender, RoutedEventArgs e) //a toolbaron belül a segitségre kattintva egy ablak ugrik fel amin egy képen belül elmagyarázza hogy kell kezelni az alkalmazást
        {
            Segitseg megnyitas = new Segitseg();
            megnyitas.Show();
            

        }

        private void rolunkmenu_click(object sender, RoutedEventArgs e) //a toolbaron belül a rolunkra kattintva felugrik egy információs messagebox ami leír rólunk 1-2 dolgot.
        {

            MessageBox.Show("Mi egy kis cég vagyunk, ami kisebb programok megírásával foglalkozik. \n A cég 2022-ben alapúlt meg Herberts Company néven. \n Bővebb információt weboldalunkon olvashat.", "Rólunk", MessageBoxButton.OK, MessageBoxImage.Information);
            
        }

        private void kapcsolatmenu_click(object sender, RoutedEventArgs e) // a toolbaron belül a kapcsolatra kattintva egy message box ugrik fel ahol a kapcsolat felvételrül találunk egy két dolgot
        {

            MessageBox.Show("Vedd fel velünk a kapcsolatot akár személyesen akár online: \n Tel.: 06 1 999 999 \n Email: devfejlesztes@info.hu \n Helyszín: 2151 Fót Vörösmarty Utca 1", "Kapcsolat felvétel", MessageBoxButton.OK, MessageBoxImage.Information);

        }
        private void bejelentkezesmenu_click(object sender, RoutedEventArgs e) //a toolbaron belül a módosításokra kattintva behoz egy ablakot ahol a belépsi adatokat lehet módosítani.
        {

            LoginEdit megnyitas2 = new LoginEdit();
            megnyitas2.Show();

        }
        private void kijelentkezesmenu_click(object sender, RoutedEventArgs e) //a toolbaron belül a kijelentkezésre kattintva ez kijelentkeztet az alkalmazásból és vissza visz a bejelentkezési felületre.
        {
            LoginAbalk megnyitas3 = new LoginAbalk();
            megnyitas3.Show();
            this.Close();

        }

        private void nevjegymenu_click(object sender, RoutedEventArgs e) // a toolbaron belül a nevjegyre kattintva behozza az alkalmazás verzió számát egy messagebox segítségével.
        {

            MessageBox.Show("Név: Adatbáziskezelő alkalmazás \n Verzió szám: V1.0.0 OpenBeta", "Alkalmazás névjegye", MessageBoxButton.OK, MessageBoxImage.Information);
        }

        private void keresesgomb_Click(object sender, RoutedEventArgs e) //ez a keresés funkció megvalósítása ID alapján lehet keresgélni az adatbázis táblázatában a könnyebb megtalálás érdekében.
        {
            

            try
            {
                if (haErvenyes2())
                {
                    SqlCommand command = new SqlCommand("select * from tblAdmin where ID = '" + int.Parse(kereses_txt.Text) + "'", con);
                    SqlDataAdapter sd = new SqlDataAdapter(command);
                    DataTable dt = new DataTable();
                    sd.Fill(dt);
                    datagrid.ItemsSource = dt.DefaultView;
                    reset();
                }
            }
            catch (SqlException ex)
            {
                MessageBox.Show(ex.Message);
            }

        }

        private void visszabtn22_Click(object sender, RoutedEventArgs e) //mivel a keresés funkcióban az adatbázis a keresett ID-re ugrik és csak azt mutatja ezért kell egy vissza gomb is ami újra kilistázza az összes ID-t
        {
            con.Open();
            con.Close();
            betoltesGrid();
            reset();
        }

        private void vilagostema_click(object sender, RoutedEventArgs e) //A textboxok, textek, datagrid, gridek átszínezáse, ez valósítja meg a TÉMA funkció működését.
        {
            nev_txt.Background = Brushes.White;
            nev_txt.Foreground = Brushes.Black;
            nev_txt.BorderBrush = Brushes.Black;
         

            hozzaferes_txt.Background = Brushes.White;
            hozzaferes_txt.Foreground = Brushes.Black;
            hozzaferes_txt.BorderBrush = Brushes.Black;

            kereses_txt.Background = Brushes.White;
            kereses_txt.Foreground = Brushes.Black;
            kereses_txt.BorderBrush = Brushes.Black;

            email_txt.Background = Brushes.White;
            email_txt.Foreground = Brushes.Black;
            email_txt.BorderBrush = Brushes.Black;

            biztonsagi_txt.Background = Brushes.White;
            biztonsagi_txt.Foreground = Brushes.Black;
            biztonsagi_txt.BorderBrush = Brushes.Black;

            gridalap.Background = Brushes.White;
           
            datagrid.Background = Brushes.White;
            datagrid.Foreground = Brushes.Black;
            datagrid.BorderBrush = Brushes.Black;
            datagrid.RowBackground = Brushes.White;
            datagrid.HorizontalGridLinesBrush = Brushes.Black;
            datagrid.VerticalGridLinesBrush = Brushes.Black;

            admintext.Foreground = Brushes.Black;
            nevtext.Foreground = Brushes.Black;
            emailtext.Foreground = Brushes.Black;
            hferestext.Foreground = Brushes.Black;
            biztonsagitext.Foreground = Brushes.Black;
            idtext.Foreground = Brushes.Black;

        }

        private void sotettema_click(object sender, RoutedEventArgs e) //A textboxok, textek, datagrid, gridek átszínezáse, ez valósítja meg a TÉMA funkció működését.
        {
            nev_txt.Background = Brushes.Black;
            nev_txt.Foreground = Brushes.White;
            nev_txt.BorderBrush = Brushes.White;


            hozzaferes_txt.Background = Brushes.Black;
            hozzaferes_txt.Foreground = Brushes.White;
            hozzaferes_txt.BorderBrush = Brushes.White;

            kereses_txt.Background = Brushes.Black;
            kereses_txt.Foreground = Brushes.White;
            kereses_txt.BorderBrush = Brushes.White;

            email_txt.Background = Brushes.Black;
            email_txt.Foreground = Brushes.White;
            email_txt.BorderBrush = Brushes.White;

            biztonsagi_txt.Background = Brushes.Black;
            biztonsagi_txt.Foreground = Brushes.White;
            biztonsagi_txt.BorderBrush = Brushes.White;

            gridalap.Background = Brushes.Black;

            datagrid.Background = Brushes.Black;
            datagrid.Foreground = Brushes.White;
            datagrid.BorderBrush = Brushes.White;
            datagrid.RowBackground = Brushes.Black;
            datagrid.HorizontalGridLinesBrush = Brushes.White;
            datagrid.VerticalGridLinesBrush = Brushes.White;

            admintext.Foreground = Brushes.White;
            nevtext.Foreground = Brushes.White;
            emailtext.Foreground = Brushes.White;
            hferestext.Foreground = Brushes.White;
            biztonsagitext.Foreground = Brushes.White;
            idtext.Foreground = Brushes.White;
        }

        private void kektema_click(object sender, RoutedEventArgs e) //A textboxok, textek, datagrid, gridek átszínezáse, ez valósítja meg a TÉMA funkció működését.
        {
            nev_txt.Background = Brushes.Blue;
            nev_txt.Foreground = Brushes.White;
            nev_txt.BorderBrush = Brushes.White;


            hozzaferes_txt.Background = Brushes.Blue;
            hozzaferes_txt.Foreground = Brushes.White;
            hozzaferes_txt.BorderBrush = Brushes.White;

            kereses_txt.Background = Brushes.Blue;
            kereses_txt.Foreground = Brushes.White;
            kereses_txt.BorderBrush = Brushes.White;

            email_txt.Background = Brushes.Blue;
            email_txt.Foreground = Brushes.White;
            email_txt.BorderBrush = Brushes.White;

            biztonsagi_txt.Background = Brushes.Blue;
            biztonsagi_txt.Foreground = Brushes.White;
            biztonsagi_txt.BorderBrush = Brushes.White;

            gridalap.Background = Brushes.Blue;

            datagrid.Background = Brushes.Blue;
            datagrid.Foreground = Brushes.White;
            datagrid.BorderBrush = Brushes.White;
            datagrid.RowBackground = Brushes.Blue;
            datagrid.HorizontalGridLinesBrush = Brushes.White;
            datagrid.VerticalGridLinesBrush = Brushes.White;

            admintext.Foreground = Brushes.White;
            nevtext.Foreground = Brushes.White;
            emailtext.Foreground = Brushes.White;
            hferestext.Foreground = Brushes.White;
            biztonsagitext.Foreground = Brushes.White;
            idtext.Foreground = Brushes.White;
        }

    }
}
