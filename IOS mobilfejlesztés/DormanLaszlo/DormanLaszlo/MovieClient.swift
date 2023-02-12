//
//  MovieClient.swift
//  DormanLaszlo
//
//  Created by Hallgató (4-11-12) on 2022. 11. 29..
//

import Foundation
class MovieClient: ObservableObject {
    let baseUrl = "https://api.themoviedb.org/3/"
    let imageBaseUrl = "https://image.tmdb.org/t/p/w500"
    let apiKey = "d4529a918dda98f1bf32d44cc7abf408"
    
    @Published var mvs = MovieProviderResponse()
    
    func getMovieProviders(completion: @escaping (MovieProviderResponse) -> ()) {
        let url = URL(string: "\(baseUrl)watch/providers/movie?api_key=\(apiKey)")
        if let url = url {
            URLSession.shared.dataTask(with: url) { data, response, error in
                let urlResponse = response as! HTTPURLResponse
                if urlResponse.statusCode == 200 {
                    let mvs = try! JSONDecoder().decode(MovieProviderResponse.self, from: data!)
                    print(mvs.results?.count ?? "")
                    
                    DispatchQueue.main.async {
                        completion(mvs)
                    
                    }
                }
                else {
                    print("status code: \(urlResponse.statusCode)")
                }
            }.resume()
        }
        else {
            print("Invalid url")
        }
    }
}
