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
using System.Windows.Shapes;

namespace WPFbeadandomunka
{
    /// <summary>
    /// Interaction logic for LoginAblak.xaml
    /// </summary>
    public partial class LoginAbalk : Window
    {
        public LoginAbalk()
        {
            InitializeComponent();
        }

        private void btnbekuldes_Click(object sender, RoutedEventArgs e) //Ez a bejelentkezes gomb funkciója csatlakozik az adabázishoz és összeveti a beírt adatokat az adatbáziséval,
                                                                         //és ha nem egyezik tehát hibás felhasználónév vagy jelszó van megadva akkor hibát ad vissza vagyis felugrik egy messagebox,
                                                                         //hogy hibás adatok lettek megadva,
                                                                         //utána ha megadjuk a helyes adatokat a bejelentkezés sikeres lesz bezárja az ablakot a this.Close()-al,
                                                                         //és megnyitja az adatbázis kezelő lapot.
        {
            SqlConnection sqlCon = new SqlConnection(@"Data Source=.\sqlexpress; Initial Catalog=LoginDB; Integrated Security=True;");
            try
            {
                if (sqlCon.State == ConnectionState.Closed) sqlCon.Open();
                String query = "SELECT COUNT(1) FROM tblUser WHERE Username=@Username AND Password=@Password";
                SqlCommand sqlCmd = new SqlCommand(query, sqlCon);
                sqlCmd.CommandType = CommandType.Text;
                sqlCmd.Parameters.AddWithValue("@Username", txtUsername.Text);
                sqlCmd.Parameters.AddWithValue("@Password", txtPassword.Password);
                int count = Convert.ToInt32(sqlCmd.ExecuteScalar());
                if (count == 1)
                {
                    MainWindow dashboard = new MainWindow();
                    dashboard.Show();
                    this.Close();
                }
                else
                {
                    MessageBox.Show("Rossz felhasználónév, vagy jelszó!", "Hibás!", MessageBoxButton.OK, MessageBoxImage.Error);
                }
            }
            catch (Exception ex)
            {
                MessageBox.Show(ex.Message);
            }
            finally
            {
                sqlCon.Close();
            }
        }
    }
}
