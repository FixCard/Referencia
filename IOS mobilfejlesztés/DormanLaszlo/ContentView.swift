

import SwiftUI

struct ContentView: View {
    
    
    @State var movieProviders = MovieProviderResponse()
    
    var body: some View {
        //MovieDetailView()
        NavigationView {
            List(movieProviders.results ?? [], id: \.providerID) { movieProviders in
                NavigationLink {
                    VStack {
                        Text(movieProviders.providerName ?? "").font(.headline)
                    }
                    
                } label: {
                    VStack(alignment: .leading) {
                        Text(movieProviders.providerName ?? "").font(.headline)
                        Text("\(movieProviders.displayPriority ?? 0)").font(.subheadline)
                    }
                }
            }
            .onAppear() {
                MovieClient().getMovieProviders() { (movieProviders) in
                    self.movieProviders = movieProviders
                }
            }
        }
    }
}

struct ContentView_Previews: PreviewProvider {
    static var previews: some View {
        ContentView()
    }
}
