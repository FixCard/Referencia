package com.example.androidbeadando;

import static android.content.Context.MODE_PRIVATE;

import android.app.AlertDialog;
import android.content.DialogInterface;
import android.content.SharedPreferences;
import android.os.Bundle;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.Button;
import android.widget.EditText;
import android.widget.ImageView;
import android.widget.TextView;

import androidx.fragment.app.Fragment;

import com.google.gson.Gson;


public class SettingsFragment extends Fragment {

    Button btnnyilatkozat;
    Button btnnevjegy;
    AlertDialog.Builder builder;
    public TextView total;
    public static Button avatarbutton;
    public static ImageView avatarimageview;
    public int current_image;
    public int[] images ={R.drawable.avatar2, R.drawable.avatar3, R.drawable.avatar4, R.drawable.avatar5, R.drawable.avatar6, R.drawable.avatar7, R.drawable.avatar1, };

    @Override
    public View onCreateView(LayoutInflater inflater, ViewGroup container,
                             Bundle savedInstanceState) {

        // Inflate the layout for this fragment
        View view = inflater.inflate(R.layout.fragment_settings, container, false);
        MainActivity mainActivity = (MainActivity)getActivity();

        btnnyilatkozat = view.findViewById(R.id.nyilatkozatbutton);
        btnnevjegy = view.findViewById(R.id.nevbutton);
        builder = new AlertDialog.Builder(getActivity());
        total = new TextView(getActivity());
        avatarbutton = view.findViewById(R.id.avatarbtn);
        avatarimageview = view.findViewById(R.id.avatarimage);
        Button buttontorles = view.findViewById(R.id.torlesbutton);
        avatarimageview.setImageResource(R.drawable.avatar1);
        buttonclick();


        /*if(mainActivity.getAvatarBeallit() != null)
            avatarimageview.setImageResource(mainActivity.getAvatarBeallit());

        Button avatarmentes = view.findViewById(R.id.avatarmentes);

        avatarmentes.setOnClickListener(v -> {
            ImageView avatarocska = avatarimageview;
            mainActivity.saveAndNavigate5(avatarocska);

        });*/


        EditText osszegbeallit = view.findViewById(R.id.osszegbeallit);
        if(mainActivity.getOsszegBeallit() != null)
            osszegbeallit.setText(mainActivity.getOsszegBeallit());

        Button osszegmentes = view.findViewById(R.id.osszegmentes);

        osszegmentes.setOnClickListener(v -> {
            String osszegecske = osszegbeallit.getText().toString();
            mainActivity.saveAndNavigate(osszegecske);

        });

        Button button2 = (Button) view.findViewById(R.id.button2);
        button2.setOnClickListener(new View.OnClickListener() {

            @Override
            public void onClick(View v) {


                System.exit(0);
            }
        });

        buttontorles.setOnClickListener(v -> {
            SharedPreferences sharedPreferences = getActivity().getSharedPreferences("shared preferences", MODE_PRIVATE );
            SharedPreferences.Editor editor = sharedPreferences.edit();
            Gson gson = new Gson();

            editor.clear();
            editor.commit();

            if(mainActivity.getOsszegBeallit() != null)
                osszegbeallit.setText("0");

            String osszegecske = osszegbeallit.getText().toString();
            mainActivity.saveAndNavigate3(osszegecske);


            if(mainActivity.getKiadasBeallit() != null)
                total.setText("0");

            String kiadasocska = total.getText().toString();
            mainActivity.saveAndNavigate4(kiadasocska);

        });

        btnnyilatkozat.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                builder.setTitle("Jogi Nyilatkozat")
                        .setMessage("Ez az alkalmazás összes grafikai megjelenítése és szövege az L&A&L Tulajdonát képzi, minden szerzői jogi védelem alatt ál ami a jogtulajdonost képezi.")
                        .setCancelable(true)
                        .setNeutralButton("Megértettem", new DialogInterface.OnClickListener() {
                            @Override
                            public void onClick(DialogInterface dialogInterface, int i) {

                            }
                        })
                        .show();
            }
        });

        btnnevjegy.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                builder.setTitle("Alkalmazás névjegye")
                        .setMessage("Alkalmazás neve: Pénz Kezelő App \n Verzió szám: v1.0.0 OpenBETA")
                        .setCancelable(true)
                        .setNeutralButton("Ok", new DialogInterface.OnClickListener() {
                            @Override
                            public void onClick(DialogInterface dialogInterface, int i) {

                            }
                        })
                        .show();
            }
        });

        return view;
    }

    public void buttonclick(){

        avatarbutton.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {

                current_image++;
                current_image=current_image % images.length;
                avatarimageview.setImageResource(images[current_image]);

            }
        });

    }

}