#include<iostream>
#include<windows.h>
#include<stdlib.h>
#include<stdio.h>
#include <Mmsystem.h>
#include <mciapi.h>
#include <ctime>
/* 
Author = FixCard, Name = Dungeon Cleaner THE GAME, Version = 1.0
*/
using namespace std;
int main()
{
	setlocale(LC_ALL, "Hun");
	HANDLE h = GetStdHandle(STD_OUTPUT_HANDLE);
	int termekkulcs;
	cout << "A j�t�k ind�t�s�hoz k�rem �rja be a term�kkulcsot! J� sz�rakoz�st. :)" << endl;
	cout << "[A term�k kulcs"; SetConsoleTextAttribute(h, 4); cout << " CSAK "; SetConsoleTextAttribute(h, 15); cout << "sz�mokb�l �ll, illetve ha hib�s a kulcs abban az esetben a j�t�k �jra k�ri azt.]" << endl;
	SetConsoleTextAttribute(h, 9); cout << "A j�t�kot k�sz�tette:"; SetConsoleTextAttribute(h, 15); cout << " FixCard" << endl;
	do
	{
		
		SetConsoleTextAttribute(h, 9); cout << "K�rem a term�kkulcsot: ";
		SetConsoleTextAttribute(h, 15); cin >> termekkulcs;
		SetConsoleTextAttribute(h, 9); cout << "License: "; SetConsoleTextAttribute(h, 4); cout << "DENIED" << endl;
		system("cls");

	} while (termekkulcs != 12349876);
	SetConsoleTextAttribute(h, 9); cout << "License: "; SetConsoleTextAttribute(h, 2); cout << "GRANTED" << endl;
	SetConsoleTextAttribute(h, 9); cout << "J�t�k ind�t�sa..." << endl;
	string nev;
	SetConsoleTextAttribute(h, 2); cout << " ------------------------------------------ " << endl; cout << "|       "; SetConsoleTextAttribute(h, 15); cout << "Dungeon Cleaer Alpha Version"; SetConsoleTextAttribute(h, 2); cout << "       |" << endl;  cout << " ------------------------------------------ " << endl;
	SetConsoleTextAttribute(h, 9); cout << "J�t�kos n�v: ";
	SetConsoleTextAttribute(h, 15); cin >> nev;
	system("cls");
	SetConsoleTextAttribute(h, 4); cout << "God of the Dungeon: "; SetConsoleTextAttribute(h, 15); cout << "�dv�z�llek " << nev << endl;
	SetConsoleTextAttribute(h, 9); cout << "K�szen �llsz a v�gtelens�gig tart� harcra ? Igen ="; SetConsoleTextAttribute(h, 15); cout << " 1 "; SetConsoleTextAttribute(h, 9); cout << " || Nem ="; SetConsoleTextAttribute(h, 15); cout <<" 2 " << endl;
	SetConsoleTextAttribute(h, 15); int valasz;
	cin >> valasz;
	if (valasz == 1)
	{
		srand((unsigned)time(NULL));
		int kazamataszint = 1;
		int karakterszint{};
		int szornyszint = rand() % kazamataszint + 1;
		int valasz;
		int menekules = 3;
		int targydropp = 3;
		int lehetsegesdropp;
		int highscore = 0;
		int legyozottszorny = 0;
		int tenylegesmenekulesesely;
		setlocale(LC_ALL, "hun");
		karakterszint++;
		SetConsoleTextAttribute(h, 9); cout << "Statok:" << endl;
		SetConsoleTextAttribute(h, 9); cout << "H�s�d neve: "; SetConsoleTextAttribute(h, 15); cout << "" << nev << endl;
		SetConsoleTextAttribute(h, 9); cout << "HighScore: "; SetConsoleTextAttribute(h, 15); cout <<"" << highscore << endl;
		SetConsoleTextAttribute(h, 9); cout << "H�s�d szintje: "; SetConsoleTextAttribute(h, 15); cout <<"" << karakterszint << endl;
		cout << " " << endl;
		cout << " " << endl;
		SetConsoleTextAttribute(h, 9); cout << "Elkezdt�l les�t�lni a/az "; SetConsoleTextAttribute(h, 15); cout <<"" << kazamataszint; SetConsoleTextAttribute(h, 9); cout << ". szintre." << endl;
		SetConsoleTextAttribute(h, 9); cout << "�tk�zbe bele�tk�zt�l egy sz�rnybe aminek a szintje: "; SetConsoleTextAttribute(h, 15); cout <<"" << szornyszint << endl;
		SetConsoleTextAttribute(h, 9); cout << "A te szinted: "; SetConsoleTextAttribute(h, 15); cout << "" << karakterszint << endl;
		SetConsoleTextAttribute(h, 9); cout << "Mit szeretn�l tenni? Megk�zd�k vele ="; SetConsoleTextAttribute(h, 15); cout << " 1 "; SetConsoleTextAttribute(h, 9); cout << " || Megpr�b�lok elfutni ="; SetConsoleTextAttribute(h, 15); cout << " 2 "; SetConsoleTextAttribute(h, 9); cout << " || Kimegyek a kazamat�b�l ="; SetConsoleTextAttribute(h, 15); cout << " 3 " << endl;
		do
		{
			SetConsoleTextAttribute(h, 15); cin >> valasz;
			if (valasz == 1)
			{
				if (karakterszint >= szornyszint)
				{
					system("cls");
					SetConsoleTextAttribute(h, 9); cout << "Gratul�lok sikeresen teljes�tetted a/az "; SetConsoleTextAttribute(h, 15); cout <<"" << kazamataszint;
					SetConsoleTextAttribute(h, 9); cout << " szintet." << endl;
					SetConsoleTextAttribute(h, 9); cout << "Gratul�lok legy�zted a sz�rnyet aminek szintje: "; SetConsoleTextAttribute(h, 15); cout <<"" << szornyszint << endl;
					kazamataszint++;
					highscore = highscore + 25;
					legyozottszorny++;
					srand((unsigned)time(NULL));
					lehetsegesdropp = rand() % targydropp;
					karakterszint = lehetsegesdropp + karakterszint;
					SetConsoleTextAttribute(h, 9); cout << "Tal�lt�l a sz�rny mellett egy felszerel�st melynek ereje: "; SetConsoleTextAttribute(h, 15); cout << "" << lehetsegesdropp; SetConsoleTextAttribute(h, 9); cout << " �gy a karaktered szintje a k�vetkez�re n�tt: "; SetConsoleTextAttribute(h, 15); cout << "" << karakterszint << endl;
					szornyszint = rand() % kazamataszint + 1;
					cout << " " << endl;
					cout << " " << endl;
					SetConsoleTextAttribute(h, 9); cout << "Statok:" << endl;
					SetConsoleTextAttribute(h, 9); cout << "H�s�d neve: "; SetConsoleTextAttribute(h, 15); cout <<"" << nev << endl;
					SetConsoleTextAttribute(h, 9); cout << "HighScore: "; SetConsoleTextAttribute(h, 15); cout <<"" << highscore << endl;
					SetConsoleTextAttribute(h, 9); cout << "H�s�d szintje: "; SetConsoleTextAttribute(h, 15); cout <<"" << karakterszint << endl;
					cout << " " << endl;
					cout << " " << endl;
					SetConsoleTextAttribute(h, 9); cout << "Elkezdt�l les�t�lni a/az "; SetConsoleTextAttribute(h, 15); cout << "" << kazamataszint; SetConsoleTextAttribute(h, 9); cout << ". szintre." << endl;
					SetConsoleTextAttribute(h, 9); cout << "�tk�zbe bele�tk�zt�l egy sz�rnybe aminek a szintje: "; SetConsoleTextAttribute(h, 15); cout << "" << szornyszint << endl;
					SetConsoleTextAttribute(h, 9); cout << "A te szinted: "; SetConsoleTextAttribute(h, 15); cout << "" << karakterszint << endl;
					SetConsoleTextAttribute(h, 9); cout << "Mit szeretn�l tenni? Megk�zd�k vele ="; SetConsoleTextAttribute(h, 15); cout << " 1 "; SetConsoleTextAttribute(h, 9); cout << " || Megpr�b�lok elfutni ="; SetConsoleTextAttribute(h, 15); cout << " 2 "; SetConsoleTextAttribute(h, 9); cout << " || Kimegyek a kazamat�b�l ="; SetConsoleTextAttribute(h, 15); cout << " 3 " << endl;
				}
				else
				{
					system("cls");
					SetConsoleTextAttribute(h, 9); cout << "Meghalt�l! :'(" << endl;
					SetConsoleTextAttribute(h, 9); cout << "Te szinted: "; SetConsoleTextAttribute(h, 15); cout << "" << karakterszint << endl;
					SetConsoleTextAttribute(h, 9); cout << "Sz�rny szintje: "; SetConsoleTextAttribute(h, 15); cout <<"" << szornyszint << endl;
					cout << " " << endl;
					cout << " " << endl;
					SetConsoleTextAttribute(h, 9); cout << "Dungeonba el�rt teljes�tm�nyeid:" << endl;
					SetConsoleTextAttribute(h, 9); cout << "H�s�d neve: "; SetConsoleTextAttribute(h, 15); cout <<"" << nev << endl;
					SetConsoleTextAttribute(h, 9); cout << "Highscore: "; SetConsoleTextAttribute(h, 15); cout <<"" << highscore << endl;
					SetConsoleTextAttribute(h, 9); cout << "H�s�d szintje: "; SetConsoleTextAttribute(h, 15); cout <<"" << karakterszint << endl;
					SetConsoleTextAttribute(h, 9); cout << "Legnagyobb el�rt szint a kazamat�ban: "; SetConsoleTextAttribute(h, 15); cout <<"" << kazamataszint << endl;
					SetConsoleTextAttribute(h, 9); cout << "Legy�z�tt sz�rnyek sz�ma: "; SetConsoleTextAttribute(h, 15); cout <<"" << legyozottszorny << endl;
					cout << " " << endl;
					cout << " " << endl;
					system("pause");
					return 0;
				}
			}
			if (valasz == 2)
			{
				tenylegesmenekulesesely = rand() % menekules + 1;
				if (tenylegesmenekulesesely == 1);
				{
					system("cls");
					SetConsoleTextAttribute(h, 9); cout << "Sikeres menek�l�s! Elkezdt�l futni mint egy birka �s a sz�rnyet magad m�g�tt hagytad" << endl; cout << "majd a h�s�d szintj�hez hasonl� kazamata szinten k�t�tt�l ki." << endl;
					kazamataszint = karakterszint;
					szornyszint = karakterszint;
					cout << " " << endl;
					cout << " " << endl;
					SetConsoleTextAttribute(h, 9); cout << "A szint ahova elmenek�lt�l: "; SetConsoleTextAttribute(h, 15); cout <<"" << kazamataszint << endl;
					SetConsoleTextAttribute(h, 9); cout << "A H�s�d szintje: "; SetConsoleTextAttribute(h, 15); cout <<"" << karakterszint << endl;
					SetConsoleTextAttribute(h, 9); cout << "A tal�lt Sz�rny szintje: "; SetConsoleTextAttribute(h, 15); cout <<"" << szornyszint << endl;
					cout << " " << endl;
					SetConsoleTextAttribute(h, 9); cout << "Mit szeretn�l tenni? Megk�zd�k vele ="; SetConsoleTextAttribute(h, 15); cout << " 1 "; SetConsoleTextAttribute(h, 9); cout << " || Megpr�b�lok elfutni megint... ="; SetConsoleTextAttribute(h, 15); cout << " 2 "; SetConsoleTextAttribute(h, 9); cout << " || Kimegyek a kazamat�b�l ="; SetConsoleTextAttribute(h, 15); cout << " 3 " << endl;
				}

				if (tenylegesmenekulesesely == 2)
				{
					system("cls");
					SetConsoleTextAttribute(h, 9); cout << "Sajnos nem siker�lt elmenek�lni mert elest�l egy kavicsban �s a sz�rny meg�lt. :'(" << endl;
					SetConsoleTextAttribute(h, 9); cout << "Te szinted: "; SetConsoleTextAttribute(h, 15); cout <<"" << karakterszint << endl;
					SetConsoleTextAttribute(h, 9); cout << "Sz�rny szintje: "; SetConsoleTextAttribute(h, 15); cout << "" << szornyszint << endl;
					cout << " " << endl;
					cout << " " << endl;
					SetConsoleTextAttribute(h, 9); cout << "Dungeonba el�rt teljes�tm�nyeid:" << endl;
					SetConsoleTextAttribute(h, 9); cout << "H�s�d neve: "; SetConsoleTextAttribute(h, 15); cout << "" << nev << endl;
					SetConsoleTextAttribute(h, 9); cout << "Highscore: "; SetConsoleTextAttribute(h, 15); cout << "" << highscore << endl;
					SetConsoleTextAttribute(h, 9); cout << "H�s�d szintje: "; SetConsoleTextAttribute(h, 15); cout <<"" << karakterszint << endl;
					SetConsoleTextAttribute(h, 9); cout << "Legnagyobb el�rt szint a kazamat�ban: "; SetConsoleTextAttribute(h, 15); cout << "" << kazamataszint << endl;
					SetConsoleTextAttribute(h, 9); cout << "Legy�z�tt sz�rnyek sz�ma: "; SetConsoleTextAttribute(h, 15); cout << "" << legyozottszorny << endl;
					cout << " " << endl;
					cout << " " << endl;
					system("pause");
					return 0;
				}
				if (tenylegesmenekulesesely == 3)
				{
					system("cls");
					SetConsoleTextAttribute(h, 9); cout << "Sajnos nem siker�lt elmenek�lni mert elest�l egy kavicsban �s a sz�rny meg�lt. :'(" << endl;
					SetConsoleTextAttribute(h, 9); cout << "Te szinted: "; SetConsoleTextAttribute(h, 15); cout << "" << karakterszint << endl;
					SetConsoleTextAttribute(h, 9); cout << "Sz�rny szintje: "; SetConsoleTextAttribute(h, 15); cout << "" << szornyszint << endl;
					cout << " " << endl;
					cout << " " << endl;
					SetConsoleTextAttribute(h, 9); cout << "Dungeonba el�rt teljes�tm�nyeid:" << endl;
					SetConsoleTextAttribute(h, 9); cout << "H�s�d neve: "; SetConsoleTextAttribute(h, 15); cout << "" << nev << endl;
					SetConsoleTextAttribute(h, 9); cout << "Highscore: "; SetConsoleTextAttribute(h, 15); cout << "" << highscore << endl;
					SetConsoleTextAttribute(h, 9); cout << "H�s�d szintje: "; SetConsoleTextAttribute(h, 15); cout << "" << karakterszint << endl;
					SetConsoleTextAttribute(h, 9); cout << "Legnagyobb el�rt szint a kazamat�ban: "; SetConsoleTextAttribute(h, 15); cout << "" << kazamataszint << endl;
					SetConsoleTextAttribute(h, 9); cout << "Legy�z�tt sz�rnyek sz�ma: "; SetConsoleTextAttribute(h, 15); cout << "" << legyozottszorny << endl;
					cout << " " << endl;
					cout << " " << endl;
					system("pause");
					return 0;
				}
			}
			if (valasz == 3)
			{
				cout << " " << endl;
				cout << " " << endl;
				system("cls");
				SetConsoleTextAttribute(h, 9); cout << "M�ris kil�psz? :'(" << endl;
				SetConsoleTextAttribute(h, 9); cout << "Dungeonba el�rt teljes�tm�nyeid:" << endl;
				SetConsoleTextAttribute(h, 9); cout << "H�s�d neve: "; SetConsoleTextAttribute(h, 15); cout <<"" << nev << endl;
				SetConsoleTextAttribute(h, 9); cout << "Highscore: "; SetConsoleTextAttribute(h, 15); cout << "" << highscore << endl;
				SetConsoleTextAttribute(h, 9); cout << "H�s�d szintje: "; SetConsoleTextAttribute(h, 15); cout <<"" << karakterszint << endl;
				SetConsoleTextAttribute(h, 9); cout << "Legnagyobb el�rt szint a kazamat�ban: "; SetConsoleTextAttribute(h, 15); cout <<"" << kazamataszint << endl;
				SetConsoleTextAttribute(h, 9); cout << "Legy�z�tt sz�rnyek sz�ma: "; SetConsoleTextAttribute(h, 15); cout <<"" << legyozottszorny << endl;
				cout << " " << endl;
				cout << " " << endl;
				system("pause");
				return 0;
			}
		} while (karakterszint << szornyszint);
		system("pause");
		return 0;
	}
	else
	{
		SetConsoleTextAttribute(h, 9); cout << "Kil�p�s a j�t�kb�l... Majd gyere vissza ha van el�g b�tors�god." << endl;
		system("pause");
		return 0;
	}
}