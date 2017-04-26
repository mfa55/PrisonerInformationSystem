package com.hallak.repositories;

import com.hallak.entities.Victim;
import org.springframework.data.repository.PagingAndSortingRepository;


/**
 * Created by mrhal on 4/21/2017.
 */
public interface VictimRepository extends PagingAndSortingRepository<Victim, Integer> {
}
