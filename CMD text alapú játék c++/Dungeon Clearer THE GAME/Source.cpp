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
	cout << "A játék indításához kérem írja be a termékkulcsot! Jó szórakozást. :)" << endl;
	cout << "[A termék kulcs"; SetConsoleTextAttribute(h, 4); cout << " CSAK "; SetConsoleTextAttribute(h, 15); cout << "számokból áll, illetve ha hibás a kulcs abban az esetben a játék újra kéri azt.]" << endl;
	SetConsoleTextAttribute(h, 9); cout << "A játékot készítette:"; SetConsoleTextAttribute(h, 15); cout << " FixCard" << endl;
	do
	{
		
		SetConsoleTextAttribute(h, 9); cout << "Kérem a termékkulcsot: ";
		SetConsoleTextAttribute(h, 15); cin >> termekkulcs;
		SetConsoleTextAttribute(h, 9); cout << "License: "; SetConsoleTextAttribute(h, 4); cout << "DENIED" << endl;
		system("cls");

	} while (termekkulcs != 12349876);
	SetConsoleTextAttribute(h, 9); cout << "License: "; SetConsoleTextAttribute(h, 2); cout << "GRANTED" << endl;
	SetConsoleTextAttribute(h, 9); cout << "Játék indítása..." << endl;
	string nev;
	SetConsoleTextAttribute(h, 2); cout << " ------------------------------------------ " << endl; cout << "|       "; SetConsoleTextAttribute(h, 15); cout << "Dungeon Cleaer Alpha Version"; SetConsoleTextAttribute(h, 2); cout << "       |" << endl;  cout << " ------------------------------------------ " << endl;
	SetConsoleTextAttribute(h, 9); cout << "Játékos név: ";
	SetConsoleTextAttribute(h, 15); cin >> nev;
	system("cls");
	SetConsoleTextAttribute(h, 4); cout << "God of the Dungeon: "; SetConsoleTextAttribute(h, 15); cout << "Üdvözöllek " << nev << endl;
	SetConsoleTextAttribute(h, 9); cout << "Készen állsz a végtelenségig tartó harcra ? Igen ="; SetConsoleTextAttribute(h, 15); cout << " 1 "; SetConsoleTextAttribute(h, 9); cout << " || Nem ="; SetConsoleTextAttribute(h, 15); cout <<" 2 " << endl;
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
		SetConsoleTextAttribute(h, 9); cout << "Hõsöd neve: "; SetConsoleTextAttribute(h, 15); cout << "" << nev << endl;
		SetConsoleTextAttribute(h, 9); cout << "HighScore: "; SetConsoleTextAttribute(h, 15); cout <<"" << highscore << endl;
		SetConsoleTextAttribute(h, 9); cout << "Hõsöd szintje: "; SetConsoleTextAttribute(h, 15); cout <<"" << karakterszint << endl;
		cout << " " << endl;
		cout << " " << endl;
		SetConsoleTextAttribute(h, 9); cout << "Elkezdtél lesétálni a/az "; SetConsoleTextAttribute(h, 15); cout <<"" << kazamataszint; SetConsoleTextAttribute(h, 9); cout << ". szintre." << endl;
		SetConsoleTextAttribute(h, 9); cout << "Útközbe beleütköztél egy szörnybe aminek a szintje: "; SetConsoleTextAttribute(h, 15); cout <<"" << szornyszint << endl;
		SetConsoleTextAttribute(h, 9); cout << "A te szinted: "; SetConsoleTextAttribute(h, 15); cout << "" << karakterszint << endl;
		SetConsoleTextAttribute(h, 9); cout << "Mit szeretnél tenni? Megküzdök vele ="; SetConsoleTextAttribute(h, 15); cout << " 1 "; SetConsoleTextAttribute(h, 9); cout << " || Megpróbálok elfutni ="; SetConsoleTextAttribute(h, 15); cout << " 2 "; SetConsoleTextAttribute(h, 9); cout << " || Kimegyek a kazamatából ="; SetConsoleTextAttribute(h, 15); cout << " 3 " << endl;
		do
		{
			SetConsoleTextAttribute(h, 15); cin >> valasz;
			if (valasz == 1)
			{
				if (karakterszint >= szornyszint)
				{
					system("cls");
					SetConsoleTextAttribute(h, 9); cout << "Gratulálok sikeresen teljesítetted a/az "; SetConsoleTextAttribute(h, 15); cout <<"" << kazamataszint;
					SetConsoleTextAttribute(h, 9); cout << " szintet." << endl;
					SetConsoleTextAttribute(h, 9); cout << "Gratulálok legyõzted a szörnyet aminek szintje: "; SetConsoleTextAttribute(h, 15); cout <<"" << szornyszint << endl;
					kazamataszint++;
					highscore = highscore + 25;
					legyozottszorny++;
					srand((unsigned)time(NULL));
					lehetsegesdropp = rand() % targydropp;
					karakterszint = lehetsegesdropp + karakterszint;
					SetConsoleTextAttribute(h, 9); cout << "Találtál a szörny mellett egy felszerelést melynek ereje: "; SetConsoleTextAttribute(h, 15); cout << "" << lehetsegesdropp; SetConsoleTextAttribute(h, 9); cout << " Így a karaktered szintje a következõre nõtt: "; SetConsoleTextAttribute(h, 15); cout << "" << karakterszint << endl;
					szornyszint = rand() % kazamataszint + 1;
					cout << " " << endl;
					cout << " " << endl;
					SetConsoleTextAttribute(h, 9); cout << "Statok:" << endl;
					SetConsoleTextAttribute(h, 9); cout << "Hõsöd neve: "; SetConsoleTextAttribute(h, 15); cout <<"" << nev << endl;
					SetConsoleTextAttribute(h, 9); cout << "HighScore: "; SetConsoleTextAttribute(h, 15); cout <<"" << highscore << endl;
					SetConsoleTextAttribute(h, 9); cout << "Hõsöd szintje: "; SetConsoleTextAttribute(h, 15); cout <<"" << karakterszint << endl;
					cout << " " << endl;
					cout << " " << endl;
					SetConsoleTextAttribute(h, 9); cout << "Elkezdtél lesétálni a/az "; SetConsoleTextAttribute(h, 15); cout << "" << kazamataszint; SetConsoleTextAttribute(h, 9); cout << ". szintre." << endl;
					SetConsoleTextAttribute(h, 9); cout << "Útközbe beleütköztél egy szörnybe aminek a szintje: "; SetConsoleTextAttribute(h, 15); cout << "" << szornyszint << endl;
					SetConsoleTextAttribute(h, 9); cout << "A te szinted: "; SetConsoleTextAttribute(h, 15); cout << "" << karakterszint << endl;
					SetConsoleTextAttribute(h, 9); cout << "Mit szeretnél tenni? Megküzdök vele ="; SetConsoleTextAttribute(h, 15); cout << " 1 "; SetConsoleTextAttribute(h, 9); cout << " || Megpróbálok elfutni ="; SetConsoleTextAttribute(h, 15); cout << " 2 "; SetConsoleTextAttribute(h, 9); cout << " || Kimegyek a kazamatából ="; SetConsoleTextAttribute(h, 15); cout << " 3 " << endl;
				}
				else
				{
					system("cls");
					SetConsoleTextAttribute(h, 9); cout << "Meghaltál! :'(" << endl;
					SetConsoleTextAttribute(h, 9); cout << "Te szinted: "; SetConsoleTextAttribute(h, 15); cout << "" << karakterszint << endl;
					SetConsoleTextAttribute(h, 9); cout << "Szörny szintje: "; SetConsoleTextAttribute(h, 15); cout <<"" << szornyszint << endl;
					cout << " " << endl;
					cout << " " << endl;
					SetConsoleTextAttribute(h, 9); cout << "Dungeonba elért teljesítményeid:" << endl;
					SetConsoleTextAttribute(h, 9); cout << "Hõsöd neve: "; SetConsoleTextAttribute(h, 15); cout <<"" << nev << endl;
					SetConsoleTextAttribute(h, 9); cout << "Highscore: "; SetConsoleTextAttribute(h, 15); cout <<"" << highscore << endl;
					SetConsoleTextAttribute(h, 9); cout << "Hõsöd szintje: "; SetConsoleTextAttribute(h, 15); cout <<"" << karakterszint << endl;
					SetConsoleTextAttribute(h, 9); cout << "Legnagyobb elért szint a kazamatában: "; SetConsoleTextAttribute(h, 15); cout <<"" << kazamataszint << endl;
					SetConsoleTextAttribute(h, 9); cout << "Legyõzött szörnyek száma: "; SetConsoleTextAttribute(h, 15); cout <<"" << legyozottszorny << endl;
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
					SetConsoleTextAttribute(h, 9); cout << "Sikeres menekülés! Elkezdtél futni mint egy birka és a szörnyet magad mögött hagytad" << endl; cout << "majd a hõsöd szintjéhez hasonló kazamata szinten kötöttél ki." << endl;
					kazamataszint = karakterszint;
					szornyszint = karakterszint;
					cout << " " << endl;
					cout << " " << endl;
					SetConsoleTextAttribute(h, 9); cout << "A szint ahova elmenekültél: "; SetConsoleTextAttribute(h, 15); cout <<"" << kazamataszint << endl;
					SetConsoleTextAttribute(h, 9); cout << "A Hõsöd szintje: "; SetConsoleTextAttribute(h, 15); cout <<"" << karakterszint << endl;
					SetConsoleTextAttribute(h, 9); cout << "A talált Szörny szintje: "; SetConsoleTextAttribute(h, 15); cout <<"" << szornyszint << endl;
					cout << " " << endl;
					SetConsoleTextAttribute(h, 9); cout << "Mit szeretnél tenni? Megküzdök vele ="; SetConsoleTextAttribute(h, 15); cout << " 1 "; SetConsoleTextAttribute(h, 9); cout << " || Megpróbálok elfutni megint... ="; SetConsoleTextAttribute(h, 15); cout << " 2 "; SetConsoleTextAttribute(h, 9); cout << " || Kimegyek a kazamatából ="; SetConsoleTextAttribute(h, 15); cout << " 3 " << endl;
				}

				if (tenylegesmenekulesesely == 2)
				{
					system("cls");
					SetConsoleTextAttribute(h, 9); cout << "Sajnos nem sikerült elmenekülni mert elestél egy kavicsban és a szörny megölt. :'(" << endl;
					SetConsoleTextAttribute(h, 9); cout << "Te szinted: "; SetConsoleTextAttribute(h, 15); cout <<"" << karakterszint << endl;
					SetConsoleTextAttribute(h, 9); cout << "Szörny szintje: "; SetConsoleTextAttribute(h, 15); cout << "" << szornyszint << endl;
					cout << " " << endl;
					cout << " " << endl;
					SetConsoleTextAttribute(h, 9); cout << "Dungeonba elért teljesítményeid:" << endl;
					SetConsoleTextAttribute(h, 9); cout << "Hõsöd neve: "; SetConsoleTextAttribute(h, 15); cout << "" << nev << endl;
					SetConsoleTextAttribute(h, 9); cout << "Highscore: "; SetConsoleTextAttribute(h, 15); cout << "" << highscore << endl;
					SetConsoleTextAttribute(h, 9); cout << "Hõsöd szintje: "; SetConsoleTextAttribute(h, 15); cout <<"" << karakterszint << endl;
					SetConsoleTextAttribute(h, 9); cout << "Legnagyobb elért szint a kazamatában: "; SetConsoleTextAttribute(h, 15); cout << "" << kazamataszint << endl;
					SetConsoleTextAttribute(h, 9); cout << "Legyõzött szörnyek száma: "; SetConsoleTextAttribute(h, 15); cout << "" << legyozottszorny << endl;
					cout << " " << endl;
					cout << " " << endl;
					system("pause");
					return 0;
				}
				if (tenylegesmenekulesesely == 3)
				{
					system("cls");
					SetConsoleTextAttribute(h, 9); cout << "Sajnos nem sikerült elmenekülni mert elestél egy kavicsban és a szörny megölt. :'(" << endl;
					SetConsoleTextAttribute(h, 9); cout << "Te szinted: "; SetConsoleTextAttribute(h, 15); cout << "" << karakterszint << endl;
					SetConsoleTextAttribute(h, 9); cout << "Szörny szintje: "; SetConsoleTextAttribute(h, 15); cout << "" << szornyszint << endl;
					cout << " " << endl;
					cout << " " << endl;
					SetConsoleTextAttribute(h, 9); cout << "Dungeonba elért teljesítményeid:" << endl;
					SetConsoleTextAttribute(h, 9); cout << "Hõsöd neve: "; SetConsoleTextAttribute(h, 15); cout << "" << nev << endl;
					SetConsoleTextAttribute(h, 9); cout << "Highscore: "; SetConsoleTextAttribute(h, 15); cout << "" << highscore << endl;
					SetConsoleTextAttribute(h, 9); cout << "Hõsöd szintje: "; SetConsoleTextAttribute(h, 15); cout << "" << karakterszint << endl;
					SetConsoleTextAttribute(h, 9); cout << "Legnagyobb elért szint a kazamatában: "; SetConsoleTextAttribute(h, 15); cout << "" << kazamataszint << endl;
					SetConsoleTextAttribute(h, 9); cout << "Legyõzött szörnyek száma: "; SetConsoleTextAttribute(h, 15); cout << "" << legyozottszorny << endl;
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
				SetConsoleTextAttribute(h, 9); cout << "Máris kilépsz? :'(" << endl;
				SetConsoleTextAttribute(h, 9); cout << "Dungeonba elért teljesítményeid:" << endl;
				SetConsoleTextAttribute(h, 9); cout << "Hõsöd neve: "; SetConsoleTextAttribute(h, 15); cout <<"" << nev << endl;
				SetConsoleTextAttribute(h, 9); cout << "Highscore: "; SetConsoleTextAttribute(h, 15); cout << "" << highscore << endl;
				SetConsoleTextAttribute(h, 9); cout << "Hõsöd szintje: "; SetConsoleTextAttribute(h, 15); cout <<"" << karakterszint << endl;
				SetConsoleTextAttribute(h, 9); cout << "Legnagyobb elért szint a kazamatában: "; SetConsoleTextAttribute(h, 15); cout <<"" << kazamataszint << endl;
				SetConsoleTextAttribute(h, 9); cout << "Legyõzött szörnyek száma: "; SetConsoleTextAttribute(h, 15); cout <<"" << legyozottszorny << endl;
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
		SetConsoleTextAttribute(h, 9); cout << "Kilépés a játékból... Majd gyere vissza ha van elég bátorságod." << endl;
		system("pause");
		return 0;
	}
}