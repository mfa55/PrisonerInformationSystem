package com.hallak.repositories;

import com.hallak.relationships.Crime;
import org.springframework.data.repository.PagingAndSortingRepository;

/**
 * Created by mrhal on 4/21/2017.
 */
public interface CrimeRepository extends PagingAndSortingRepository<Crime, Integer> {
}
