package com.example.androidbeadando;

import static android.content.Context.MODE_PRIVATE;

import android.content.SharedPreferences;
import android.os.Bundle;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.Button;
import android.widget.TextView;

import androidx.fragment.app.Fragment;
import androidx.recyclerview.widget.LinearLayoutManager;
import androidx.recyclerview.widget.RecyclerView;

import com.google.android.material.textfield.TextInputLayout;
import com.google.gson.Gson;
import com.google.gson.reflect.TypeToken;

import java.lang.reflect.Type;
import java.util.ArrayList;


public class MoneyFragment extends Fragment {

    RecyclerView recyclerView;
    ExpenseAdapter adapter;
    ArrayList<Expense> list;
    TextInputLayout exp,amount;
    public TextView total;
    Button add;

    @Override
    public View onCreateView(LayoutInflater inflater, ViewGroup container,
                             Bundle savedInstanceState) {

        View view = inflater.inflate(R.layout.fragment_money, container, false);
        MainActivity mainActivity = (MainActivity)getActivity();

        //setContentView(R.layout.fragment_money);
        recyclerView = view.findViewById(R.id.recyclerview);
        loadData();
        exp = view.findViewById(R.id.expense);
        amount = view.findViewById(R.id.amount);
        add = view.findViewById(R.id.addbutton);
        total = view.findViewById(R.id.totalamount);

        adapter = new ExpenseAdapter(getActivity(),list);
        LinearLayoutManager llm = new LinearLayoutManager(getActivity(),RecyclerView.VERTICAL,false);
        recyclerView.setLayoutManager(llm);
        recyclerView.setAdapter(adapter);

        Button buttonSave = view.findViewById(R.id.mentes);

        if(mainActivity.getKiadasBeallit() != null)
            total.setText(mainActivity.getKiadasBeallit());
        buttonSave.setOnClickListener(v -> {
            String kiadaska = total.getText().toString();
            mainActivity.saveAndNavigate2(kiadaska);
        });

        add.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                int totalAmount = 0;
                String ex = exp.getEditText().getText().toString();
                int a = Integer.parseInt(amount.getEditText().getText().toString());
                list.add(new Expense(ex,a));
                adapter.notifyDataSetChanged();
                exp.getEditText().setText("");
                amount.getEditText().setText("");
                saveData();

                for(int i = 0;i <list.size();i++){

                    totalAmount += list.get(i).getExpenseAmount();
                    total.setText(totalAmount+"");
                }
            }
        });

        return view;
    }

    private void setContentView(int fragment_money) {
    }

    private void loadData() {
        SharedPreferences sharedPreferences = getActivity().getSharedPreferences("shared preferences", MODE_PRIVATE );
        Gson gson = new Gson();
        String json = sharedPreferences.getString("task list", null);
        Type type = new TypeToken<ArrayList<Expense>>() {}.getType();
        list = gson.fromJson(json, type);

        if (list == null) {
            list = new ArrayList<>();
        }
    }

    private void saveData() {
        SharedPreferences sharedPreferences = getActivity().getSharedPreferences("shared preferences", MODE_PRIVATE );
        SharedPreferences.Editor editor = sharedPreferences.edit();
        Gson gson = new Gson();
        String json = gson.toJson(list);
        editor.putString("task list", json);

        editor.apply();
    }
}