package com.example.androidbeadando;

import android.os.Bundle;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ImageView;
import android.widget.TextView;

import androidx.fragment.app.Fragment;


public class HomeFragment extends Fragment {

    public ImageView avatarimg;

    @Override
    public View onCreateView(LayoutInflater inflater, ViewGroup container,
                             Bundle savedInstanceState) {
        // Inflate the layout for this fragment
        View view = inflater.inflate(R.layout.fragment_home, container, false);
        MainActivity mainActivity = (MainActivity) getActivity();

        avatarimg = view.findViewById(R.id.avatarimg);
        avatarimg.setImageResource(R.drawable.avatar1);
        //avatarimg.setImageResource(mainActivity.getAvatarBeallit().getImageAlpha());


        TextView osszeg = view.findViewById(R.id.szamla);

        TextView kiadas = view.findViewById(R.id.kiadasok);
        kiadas.setText(mainActivity.getKiadasBeallit());

        String egyen = mainActivity.getOsszegBeallit();
        String kiad = mainActivity.getKiadasBeallit();

        int jelenlegiosszeg = Integer.parseInt(egyen);
        int jelenlegikiadas = Integer.parseInt(kiad);

        int veglegesosszeg = jelenlegiosszeg - jelenlegikiadas;

        osszeg.setText(veglegesosszeg + "");

        return view;
    }

}