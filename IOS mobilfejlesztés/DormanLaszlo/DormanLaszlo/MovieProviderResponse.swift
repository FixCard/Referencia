//
//  MovieProviderResponse.swift
//  DormanLaszlo
//
//  Created by Hallgató (4-11-12) on 2022. 11. 29..
//

import Foundation

// MARK: - Welcome
struct MovieProviderResponse: Codable {
    var results: [Provider]?
}

// MARK: - Result
struct Provider: Codable {
    var displayPriorities: [String: Int]?
    var displayPriority: Int?
    var logoPath, providerName: String?
    var providerID: Int?

    enum CodingKeys: String, CodingKey {
        case displayPriorities = "display_priorities"
        case displayPriority = "display_priority"
        case logoPath = "logo_path"
        case providerName = "provider_name"
        case providerID = "provider_id"
    }
}
