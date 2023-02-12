package com.example.androidbeadando;

import android.os.Bundle;
import android.view.Menu;
import android.view.MenuItem;
import android.widget.ImageView;
import android.widget.Toast;

import androidx.annotation.NonNull;
import androidx.appcompat.app.AppCompatActivity;
import androidx.appcompat.widget.Toolbar;
import androidx.fragment.app.Fragment;
import androidx.fragment.app.FragmentManager;
import androidx.fragment.app.FragmentTransaction;

public class MainActivity extends AppCompatActivity {

    private String osszeg = "0";

    public String getOsszegBeallit() {
        return osszeg;
    }

    public void saveAndNavigate(String osszeg) {
        this.osszeg = osszeg;
        loadFragment(new HomeFragment(), "home");
    }

    public void saveAndNavigate3(String osszeg2) {
        this.osszeg = osszeg2;

    }

    private String kiadas = "0";

    public String getKiadasBeallit() { return kiadas; }

    public void saveAndNavigate2(String kiadas) {
        this.kiadas = kiadas;

    }

    public void saveAndNavigate4(String kiadas2) {
        this.kiadas = kiadas2;

    }

    private ImageView avatar;

    public ImageView getAvatarBeallit() { return avatar; }

    public void saveAndNavigate5(ImageView avatar) {
        this.avatar = avatar;

    }


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        Toolbar mainToolbar = findViewById(R.id.mainToolbar);
        setSupportActionBar(mainToolbar);
    }

    @Override
    public boolean onCreateOptionsMenu(Menu menu) {
        getMenuInflater().inflate(R.menu.main_menu, menu);
        return true;
    }

    @Override
    public boolean onOptionsItemSelected(@NonNull MenuItem item) {
        switch (item.getItemId()) {
            case R.id.action_home:
                //showMessage("Főoldal");
                loadFragment(new HomeFragment(), "home");
                return true;
            case R.id.action_money:
                //showMessage("Pénzkezelő");
                loadFragment(new MoneyFragment(), "money");
                return true;
            case R.id.action_valute:
                //showMessage("Valuta árfolyam");
                loadFragment(new ValuteFragment(), "valute");
                return true;
            case R.id.action_settings:
                //showMessage("Beállítások");
                loadFragment(new SettingsFragment(), "settings");
                return true;

        }

        return true;
    }

    private void loadFragment(Fragment fragment, String tag) {
        FragmentManager fragmentManager = getSupportFragmentManager();
        FragmentTransaction transaction = fragmentManager.beginTransaction();

        transaction.replace(R.id.fragmentContainerView, fragment, tag);
        transaction.addToBackStack(null);

        transaction.commit();
    }


    private void showMessage(String message) {
        Toast.makeText(getApplicationContext(), message, Toast.LENGTH_SHORT).show();
    }


}