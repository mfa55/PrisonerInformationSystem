package com.hallak.repositories;

import com.hallak.relationships.Visit;
import org.springframework.data.repository.PagingAndSortingRepository;


/**
 * Created by mrhal on 4/21/2017.
 */
public interface VisitRepository extends PagingAndSortingRepository<Visit, Integer> {
}
