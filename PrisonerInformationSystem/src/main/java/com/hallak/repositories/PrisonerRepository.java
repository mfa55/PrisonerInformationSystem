package com.hallak.repositories;

import com.hallak.entities.Prisoner;


import org.springframework.data.repository.PagingAndSortingRepository;
import org.springframework.stereotype.Repository;

/**
 * Created by mrhal on 4/21/2017.
 */
@Repository
public interface PrisonerRepository extends PagingAndSortingRepository<Prisoner, Long> {
}
