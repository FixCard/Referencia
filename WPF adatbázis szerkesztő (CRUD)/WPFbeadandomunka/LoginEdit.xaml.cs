using System;
using System.Collections.Generic;
using System.Data;
using System.Data.SqlClient;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows;
using System.Windows.Controls;
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
    /// Interaction logic for LoginEdit.xaml
    /// </summary>
    public partial class LoginEdit : Window
    {
        public LoginEdit()
        {
            InitializeComponent();
            BetoltGrid2();  //Grid betöltése miatt van rá szükség, ez fogja nekünk betölteni a táblázatot a Gridbe.
        }


        SqlConnection con = new SqlConnection(@"Data Source=.\sqlexpress; Initial Catalog=LoginDB; Integrated Security=True;"); //Csatlakoztatja az adatbázist a programhoz.


        public void reset2() //Ez egy olyan funckió ami a textboxokat egybe foglalja és ha van bele valami írva törli.
        {
            felhasznalonev_txt.Clear();
            jelszo_txt.Clear();
            kereses2_txt.Clear();

        }

        public void BetoltGrid2() //Ez jeleníti meg a gridben az adatbázis adatait.
        {
            SqlCommand cmd = new SqlCommand("select * from tblUser", con);
            DataTable dt = new DataTable();
            con.Open();
            SqlDataReader sdr = cmd.ExecuteReader();
            dt.Load(sdr);
            con.Close();
            datagrid2.ItemsSource = dt.DefaultView;
        }

        private void resetbtn2_Click(object sender, RoutedEventArgs e) //ez egy gombnak a funkciója ha lenyomják akkor végve megy a reset2 dolga, vagyis kitörli a textboxokból az információkat.
        {
            reset2();
        }

        public bool haErvenyes() //ez egy ellenörző, azt figyeli, hogy van e írva valami a textboxba vagy nincs, és ha nincs feldob egy messageboxot, hogy az a mező nincsen kitöltve.
        {
            if (felhasznalonev_txt.Text == String.Empty)
            {
                MessageBox.Show("Felhasználónév megadása kötelező!", "Sikertelen", MessageBoxButton.OK, MessageBoxImage.Error);
                return false;
            }

            if (jelszo_txt.Text == String.Empty)
            {
                MessageBox.Show("Jelszó megadása kötelező!", "Sikertelen", MessageBoxButton.OK, MessageBoxImage.Error);
                return false;
            }
            return true;

        }

        public bool haErvenyes2() //ez szintén egy ellenörző ami azt figyeli, hogy van e írva valami a textboxba vagy nincs, és ha nincs feldob egy messageboxot, hogy az a mező nincsen kitöltve.
        {
            if (felhasznalonev_txt.Text == String.Empty)
            {
                MessageBox.Show("Felhasználónév megadása kötelező!", "Sikertelen", MessageBoxButton.OK, MessageBoxImage.Error);
                return false;
            }

            if (jelszo_txt.Text == String.Empty)
            {
                MessageBox.Show("Jelszó megadása kötelező!", "Sikertelen", MessageBoxButton.OK, MessageBoxImage.Error);
                return false;
            }

            if (kereses2_txt.Text == String.Empty)
            {
                MessageBox.Show("ID megadása kötelező!", "Sikertelen", MessageBoxButton.OK, MessageBoxImage.Error);
                return false;
            }

            return true;

        }

        private void rogzitesbtn2_Click(object sender, RoutedEventArgs e) //ez a rögzíts gomb funkciója ha lenyomják végbe megy az adatok rögzítése. úgy működik hogy,
                                                                          //a textboxba írt adatokat összekapcsolja az adatbázissal és úgy a megadott helyre menti a táblázatban,
                                                                          //közben figyeli, hogy minden mező kivan e töltve, ugye ez a haervenyes() rész feladata,
                                                                          //ha van benne valami engedélyezi a rögzítést, illetve a bevitel ellenörzőtt,
                                                                          //ha van valami hiba a rögzítéssel kapcsolatban azt kiírja.
        {
            try
            {
                if (haErvenyes())
                {
                    SqlCommand cmd = new SqlCommand("INSERT INTO tblUser VALUES (@UserName, @Password)", con);
                    cmd.CommandType = CommandType.Text;
                    cmd.Parameters.AddWithValue("@UserName", felhasznalonev_txt.Text);
                    cmd.Parameters.AddWithValue("@Password", jelszo_txt.Text);
                    con.Open();
                    cmd.ExecuteNonQuery();
                    con.Close();
                    BetoltGrid2();
                    MessageBox.Show("Sikeres rögzítés", "Mentve", MessageBoxButton.OK, MessageBoxImage.Information);
                    reset2();
                }
            }
            catch (SqlException ex)
            {
                MessageBox.Show(ex.Message);
            }
        }

        private void torlesbtn2_Click(object sender, RoutedEventArgs e) //Ez a törlés gomb funckiója ha megnyomják ugye kitöröl egy recordot az adatbázis táblázatából,
                                                                        //a törlés ellenörzött ha nincs ID megadva vissza dob egy hibát és nem hajt végre semmit ha van megadva ID akkor töröl.
        {
            con.Open();
            SqlCommand cmd = new SqlCommand("delete from tblUser WHERE UserId = "+kereses2_txt.Text+" ", con);
            try
            {
                cmd.ExecuteNonQuery();
                MessageBox.Show("A Record törölve lett.", "Törölve!", MessageBoxButton.OK, MessageBoxImage.Information);
                con.Close();
                reset2();
                BetoltGrid2();
                con.Close();

            }
            catch (SqlException ex)
            {
                MessageBox.Show("Sikertelen törlés. Hiba! " + ex.Message);
            }
            finally
            {
                con.Close();
            }
        }

        private void frissitesbtn2_Click(object sender, RoutedEventArgs e) //Ez a frissítés gomb funkciója ha megynomjuk akkor a benne lévő kódsor lefut,
                                                                           //ez is ellenörzőtt tehát ha a megfelelő mezők nincsenek megadva akkor a frissítés nem végződik el és hibát dob vissza nekünk,
                                                                           //egyrészt ez lehet olyan hiba amit a haervenyes2() dobhat vissza hogy nincs kitöltve egy textbox,
                                                                           //vagy adatbázis hibát dobhat vissza amit kiír hogy mi a hiba.
        {
            con.Open();
            SqlCommand cmd = new SqlCommand("update tblUser set UserName = '"+felhasznalonev_txt.Text+"', Password = '"+jelszo_txt.Text+ "' WHERE UserId = '"+kereses2_txt.Text+"' ", con);
            try
            {
                if (haErvenyes2())
                {
                    cmd.ExecuteNonQuery();
                    MessageBox.Show("A Record sikeresen frissítve lett!", "Frissítve!", MessageBoxButton.OK, MessageBoxImage.Information);
                    reset2();
                }

            }
            catch (SqlException ex)
            {
                MessageBox.Show(ex.Message);
            }
            finally
            {
                con.Close();
                BetoltGrid2();

            }
        }

        private void bezarasbtn2_Click(object sender, RoutedEventArgs e) //Ez a bezárás gomb funkciója ha lenyomják akkor bezárja az ablakot ugye amit a this.Close() hajt végre
        {
            this.Close();
        }

    }
}
